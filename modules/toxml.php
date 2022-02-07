<?php
$xmlTag = <<<XML
<ws_response>
    <respuesta>
        <datetime>$date</datetime>
        <parameters>
            <method>$method</method>
            <param1>$p1</param1>
            <param2>$p2</param2>
        </parameters>
        <result>$res</result>
        <errors>
            <error_num>$err</error_num>
            <error_desc>$error_descr</error_desc>
        </errors>
    </respuesta>
</ws_response>
XML;

header("Content-type: text/xml");

$xmlTag = new SimpleXMLElement($xmlTag);
echo $xmlTag->asXML();
?>