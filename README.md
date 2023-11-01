# PHP Library for Excel File Formats

Aspose.Cells for PHP via Java is a feature-rich API to create, process, manipulate & convert Excel & OpenOffice spreadsheets using PHP. API offers Excel file generation, conversion, worksheets styling, Pivot Table & chart management & rendering, reliable formula calculation engine and much more - all without any dependency on Office Automation or Microsoft Excel®.

## PHP Excel Library Features

- Convert spreadsheets to different formats including PDF, XPS, images & other Excel file formats.
- Generate Excel files via API or using templates.
- Create Pivot Tables, charts, sparklines & conditional formatting rules on-the-fly.
- Refresh existing charts & convert charts to images or PDF.
- Create & manipulate comments & hyperlinks.
- Set complex formulas & calculate results via API.
- Set protection on workbooks, worksheets, cells, columns or rows.
- Create & manipulate named ranges.
- Populate worksheets through Smart Markers.

## Read & Write Excel Files
**Microsoft Excel:** XLS, XLSX, XLSB, XLTX, XLTM, XLSM, XML
**OpenOffice:** ODS
**Text:** CSV, Tab-Delimited, TXT, JSON
**Web:** HTML, MHTML

## Save Excel Files As 
**Fixed Layout:** PDF, XPS
**Images:** JPEG, PNG, BMP, SVG, TIFF, GIF, EMF
**Text:** CSV, Tab-Delimited, JSON, SQL, XML

## Getting Started with Aspose.Cells for PHP via Java

Aspose.Cells for PHP via Java consists of 2 individual parts, the script wrapper (aspose.cells.php) and Aspose.Cells for Java. These components communicate via PHP/Java Bridge whereas both require separate environments & processes for execution.

### Prerequisites
1. JDK
2. PHP/Java Bridge
3. Web Server like Tomcat
4. PHP

### Installation

1. Install Tomcat on any location such as `\java\apache-tomcat-9.0.24`.
2. Copy JavaBridge.war to `webapps` folder of Tomcat such as `\java\apache-tomcat-9.0.24\webapps`.
3. Copy aspose-cells-xx.x.jar, bcpkix-jdk15on-xxx.jar and bcprov-jdk15on-xxx.jar to `lib` folder such as `\java\apache-tomcat-9.0.24\lib`.
4. Run `\bin\startup.bat`, JavaBridge.war will be deployed to `\java\apache-tomcat-9.0.24\webapps\JavaBridge`.
5. Test http://localhost:8080/JavaBridge/test.php to ensure that PHP works fine.
6. Copy aspose.cells.php and example.php to `\java\apache-tomcat-9.0.24\webapps\JavaBridge`.
7. Open http://localhost:8080/JavaBridge/example.php or create your own PHP file as follows.

You will find the Jar and PHP library in `vendor/aspose/cells` folder.

### Create Excel XLSX File from Scratch using PHP

```php
<?php
require_once("http://localhost:8080/JavaBridge/java/Java.inc");
require_once("aspose.cells.php");
 
use aspose\cells;
use aspose\cells\Workbook;
use aspose\cells\CellsHelper;
use aspose\cells\Color;
 
$workbook = new Workbook();
$workbook->getWorksheets()->get("Sheet1")->getCells()->get("A1")->putValue("testing...");
$workbook->save("result.xlsx");
 
echo aspose\cells\BorderType::BOTTOM_BORDER;
echo "\n";
 
echo "CellsHelper version: ".CellsHelper::getVersion();
echo "\n";
?>
```

### Convert Excel XLSX File to PDF using PHP

```php
<?php
require_once("http://localhost:8080/JavaBridge/java/Java.inc");
require_once("aspose.cells.php");
 
use aspose\cells;
use aspose\cells\Workbook;
use aspose\cells\PdfSaveOptions;
 
$workbook = new Workbook("example.xlsx");
$saveOptions = new PdfSaveOptions();
$saveOptions->setOnePagePerSheet(true);
$workbook->save("example.pdf", $saveOptions);
?>
```

[Product Page](https://products.aspose.com/cells/php-java) | [Documentation](https://docs.aspose.com/cells/phpjava/) | [API Reference](https://apireference.aspose.com/cells/php) | [Code Examples](https://github.com/aspose-cells/Aspose.Cells-for-Java) | [Blog](https://blog.aspose.com/category/cells/) | [Free Support](https://forum.aspose.com/c/cells) | [Temporary License](https://purchase.aspose.com/temporary-license)
