<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="color-scheme" content="light">
<meta name="supported-color-schemes" content="light">
<style>
@media only screen and (max-width: 600px) {
.inner-body {
width: 100% !important;
border: none !important;


}
.button {
width: 100% !important;

}
.footer {
width: 100% !important;
}
}


</style>
</head>
<body>
<div class="wrapper">
    <div class="inner-body">

        <div class="header">
            {{ $header ?? 'header text' }}
        </div>

        <div class="mail_contant">
            {{ Illuminate\Mail\Markdown::parse($slot) }}
        </div>

        
            {{ $subcopy ?? '' }}
        
    </div>
    <div class="footer">
        {{ $footer ?? 'footer text' }} 
    </div>
    
</div>





</body>
</html>
