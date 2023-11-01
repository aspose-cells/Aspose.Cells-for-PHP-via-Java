<?php 

require_once("http://localhost:8080/JavaBridge/java/Java.inc");
require_once("aspose.cells.php");

echo "Java version: ".java("java.lang.System")->getProperty("java.version");
echo "\n";

use aspose\cells;

$workbook = new cells\Workbook();
$sheets = $workbook->getWorksheets();
$cells = $sheets->get(0)->getCells();
$cells->get("A1")->putValue("Hello world!");
$workbook->save("output.xlsx", cells\SaveFormat::XLSX);

echo "Hello World!\n";

?>