 <?php
 // Moves uploaded files to a directory uploads
 $filename = basename($_FILES["inpFile"]["name"]);
 $file_parts = pathinfo($filename);

switch($file_parts['extension'])
{
    case "pdf":
    $newfilename = "CV.pdf";
    $targetPath = "uploads/" . $newfilename;
    move_uploaded_file($_FILES["inpFile"]["tmp_name"], $targetPath);
    break;

    case "docx":
    $newfilename = "CV.docx";
    $targetPath = "../convertWeb/" . $newfilename;
    move_uploaded_file($_FILES["inpFile"]["tmp_name"], $targetPath);
    break;

    case "doc":
    $newfilename = "CV.doc";
    $targetPath = "../convertWeb/" . $newfilename;
    move_uploaded_file($_FILES["inpFile"]["tmp_name"], $targetPath);
    break;

    case "": // Handle file extension for files ending in '.'
    case NULL: // Handle no file extension
    break;
}
  ?>
