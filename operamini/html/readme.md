<!-- This is the code that detects Opera Mini Extreme Mode, include it in the head of the index file -->
<script type="text/javascript">
    var operaminiPath = "html/operamini.html"; //Add the path to the operamini html file

    var isOperaExtreme = -1 < navigator.userAgent.indexOf("Opera Mini/") && -1 < navigator.userAgent.indexOf("Presto/");
    !0 == isOperaExtreme && (window.location = operaminiPath);
</script>
