# PHP Library for Excel File Formats

[Aspose.Cells for PHP via Java](https://products.aspose.com/cells/php-java) is a feature-rich API to create, process, manipulate & convert Excel & OpenOffice spreadsheets using PHP. API offers Excel file generation, conversion, worksheets styling, Pivot Table & chart management & rendering, reliable formula calculation engine and much more - all without any dependency on Office Automation or Microsoft Excel®.

<p align="center">
  <a title="Download ZIP" href="https://github.com/aspose-cells/Aspose.Cells-for-PHP-via-Java/archive/master.zip">
    <img src="https://raw.githubusercontent.com/AsposeExamples/java-examples-dashboard/master/images/downloadZip-Button-Large.png" alt="Download Aspose.Cells for PHP via Java Examples, Plugins and Showcases" />
  </a>
</p>

## PHP Excel Library Features

### File Formats and Conversions

- High quality conversions from Excel to other supported formats.
- Convert any Spreadsheet to PDF with high fidelity.
- Load and save documents in the tab delimited file format.
- Easily extract worksheet text by saving in plain text format.

### Rendering

- Render Excel worksheet pages to raster images & spreadsheet pages to vector images.
- Specify image resolution, quality, compression and other options.

### Spreadsheet Content Features

- Copy an existing worksheet along with included images, charts & other objects.
- Implement data sorting, data validations and smart markers.
- Preserve or remove addin, VBA, macros.
- Add, preserve or extract OLE objects from the spreadsheets.
- Apply file encryption.

### Spreadsheet Formatting Features

- Apply formatting (fonts, colors, effects, border etc.) to chracters in the cells.
- Apply format settings on a worksheet, row, column as well as a range of cells.

### Page Setup Features

- Configure page orientation, scaling as well as paper size.
- Specify page margins and page centering.

## Read & Write Excel Files

**Microsoft Excel:** XLS, XLSX, XLSB, XLTX, XLTM, XLSM, XML\
**OpenOffice:** ODS\
**Text:** CSV, Tab-Delimited, TXT\
**Web:** HTML, MHTML

## Save Excel Files As

**Fixed Layout:** PDF, XPS\
**Images:** JPEG, PNG, BMP, SVG, TIFF, GIF, EMF

## System Requirements

Aspose.Cells for PHP via Java is platform independent API and can be used on any platform (Windows, Linux, MacOS etc.) where [PHP](http://www.php.net/downloads.php) 7 or greater versions is installed. The machine must have Oracle JDK 7 or greater versions before setting up the installation.

## Get Started with Aspose.Cells for PHP via Java

Aspose.Cells for PHP via Java consists of two individual parts, the script wrapper (aspose.cells.php) and Aspose.Cells for Java. These components communicate via PHP/Java Bridge whereas both require separate environments & processes for execution. For the detailed instructions please visit [Installation and Usage](https://docs.aspose.com/cells/java/setup-and-installation-guidelines/) documentation page.

## Create a New XLSX File and Insert Data using Java

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

[Home](https://www.aspose.com/) | [Product Page](https://products.aspose.com/cells/php-java) | [Docs](https://docs.aspose.com/cells/phpjava/) | [API Reference](https://apireference.aspose.com/php/cells) | [Examples](https://github.com/aspose-cells/Aspose.Cells-for-PHP-via-Java) | [Blog](https://blog.aspose.com/category/cells/) | [Free Support](https://forum.aspose.com/c/cells) | [Temporary License](https://purchase.aspose.com/temporary-license)
