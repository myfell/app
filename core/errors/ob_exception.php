<style type="text/css">
#exception_content {
font-family: verdana;
font-size:12;
width:60%;
padding:5px;
background-color: #F0F0F0;
}
#exception_content .errorfile { 
display:block;
line-height: 2.0em; 
}
#exception_content pre.source { 
margin: 5px 0 5px 0; 
padding: 0; 
background: none; 
border: none; 
line-height: none; 
}
#exception_content pre.source span.line { display: block; }
#exception_content pre.source span.highlight { background: #E0E0E0; }
#exception_content pre.source span.line span.number { color: none; }
#exception_content pre.source span.line span.number { color: none; }
</style>

<div id="exception_content">

<b>(<?php echo $type; ?>): </b> <?php echo $e->getMessage(); ?> <br />

<?php 
if(count($sql) > 0) 
{ 
    foreach ($sql as $db => $query)
    {
        echo '<span class="errorfile"><b>('.$db.') SQL:</b> '.$query.'</span>';
    }
} 
?>
<?php $code = ($e->getCode() != 0) ? ' Code : '. $e->getCode() : ''; ?> 

<span class="errorfile"><?php echo error_secure_path($e->getFile()) ?><? echo $code; ?><? echo ' ( Line : '.$e->getLine().' ) '; ?></span>

<?php 
if(config_item('debug_backtrace')) 
{
    // Show source code
    // ------------------------------------------------------------------------

    echo error_write_file_source($e->getFile(), $e->getLine());
    
    // ------------------------------------------------------------------------

    $debug_traces = error_debug_backtrace($e);

    if(isset($debug_traces[0]))
    {
        if($debug_traces[0]['file'] == $e->getFile() AND $debug_traces[0]['line'] == $e->getLine())
        {
            unset($debug_traces[0]);
        }

        if(isset($debug_traces[1]['file']) AND isset($debug_traces[1]['line'])) 
        { 
            foreach($debug_traces as $key => $trace) 
            { 
        ?>  
                <span class="errorfile" style="line-height: 1.8em;">
                <a href="javascript:void(0);" onclick="Obullo_Error_Toggle('error_toggle_' + <?php echo $key?>);"><?php echo error_secure_path($trace['file']); echo ' ( '?><?php echo ' Line : '.$trace['line'].' ) '; ?></a>
                </span>
        
                <?php 
                // Show source codes foreach files
                // ------------------------------------------------------------------------
                
                echo error_write_file_source($trace['file'], $trace['line'], $key);
                
                // ------------------------------------------------------------------------
                ?>
        
    <?php   } // end foreach ?>

    <?php }   // end if isset ?>     
    <?php }   // end if isset ?>

<?php }   // end if debug backtrace ?>

</div>

<script type="text/javascript">
function Obullo_Element() 
{
    var elements = new Array();
    
    for (var i = 0; i < arguments.length; i++) 
    {
        var element = arguments[i];
        if (typeof element == 'string')
            element = document.getElementById(element);
        if (arguments.length == 1)
            return element;
        elements.push(element);
    }
    return elements;
}

function Obullo_Error_Toggle(obj)
{
    var el = Obullo_Element(obj);
    el.style.display = (el.style.display != 'none' ? 'none' : '' );
}
</script>