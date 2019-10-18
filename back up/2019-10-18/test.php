
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Preloaded files example - fileuploader - Innostudio.de</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Preloaded files example - fileuploader - Innostudio.de">
        
        <link rel="shortcut icon" href="https://innostudio.de/fileuploader/images/favicon.ico">

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <link href="https://innostudio.de/fileuploader/css/font-fileuploader.css" rel="stylesheet">
        
        <!-- styles -->
        <link href="https://innostudio.de/fileuploader/css/script.css" media="all" rel="stylesheet">
        
        <!-- js -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
        <script src="https://innostudio.de/fileuploader/js/script.js" type="text/javascript"></script>
        <script src="./js/custom.js" type="text/javascript"></script>

        <style>
            body {
                font-family: 'Roboto', sans-serif;
                font-size: 14px;
                line-height: normal;
                background-color: #fff;

                margin: 0;
                padding: 20px;
            }
            
            form {
                margin: 15px;
            }
            
            .fileuploader {
                max-width: 560px;
            }
        </style>
    </head>

    <body>
        <!-- <form action="php/form_upload.php" method="post" enctype="multipart/form-data"> -->
            <!-- file input -->
                        <!-- <input type="file" name="files" data-fileuploader-files='[{"name":"stocksnap_4521.jpg","type":"image\/jpeg","size":71135,"file":"uploads\/stocksnap_4521.jpg","local":"..\/uploads\/stocksnap_4521.jpg","data":{"url":"\/fileuploader\/examples\/preloaded-files\/uploads\/stocksnap_4521.jpg","thumbnail":"uploads\/thumbs\/stocksnap_4521.jpg","readerForce":true}}]'>
            
            <input type="submit">
        </form> -->
        <form action="php/form_upload.php" method="post" enctype="multipart/form-data">
            <!-- file input -->
                        <div class="fileuploader fileuploader-theme-default"><input type="hidden" name="fileuploader-list-files" value="[]"><input type="file" name="files[]" multiple="multiple" style="position: absolute; z-index: -9999; height: 0px; width: 0px; padding: 0px; margin: 0px; line-height: 0; outline: 0px; border: 0px; opacity: 0;"><div class="fileuploader-input"><div class="fileuploader-input-caption"><span>Choose files to upload</span></div><button type="button" class="fileuploader-input-button"><span>Browse files</span></button></div><div class="fileuploader-items"><ul class="fileuploader-items-list"></ul></div></div>
            
            <input type="submit">
        </form>
    <script src="//www.googletagmanager.com/gtag/js?id=UA-105607707-1" type="text/javascript"></script>
                 <script>
                  window.dataLayer = window.dataLayer || [];
                  window.dataStorage = window.dataStorage || {};
                  function gtag(){dataLayer.push(arguments);}
                  function g_tag_fn(){window[gtag_comment](gtag2);}

                  gtag('js', new Date());
                  gtag('config', 'UA-105607707-1');
                  g_tag_fn('version', 'google.v1');
                 </script>
</html>