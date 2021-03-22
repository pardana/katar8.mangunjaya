<footer class="main-footer" style="text-align: center;">
    <span>Copyright &copy; A. Pardana | <b style="color: red">i</b>Cargo 2017 </span> All Right Reserved v1.0
</footer>

<script type="text/javascript">
    function btnPrint(){
        var divToPrint  = document.getElementById('tbl');
        var popupWin    = window.open('', '_blank', 'width=700, height=500');
        popupWin.document.open();
        popupWin.document.write('<html>\n\
                                    <head>\n\
                                    </head>\n\n\
                                    <body onload="window.print()">\n\
                                        <h2 align="center">Report Table</h2>\n\
                                        <table border="1" style="border-collapse: collapse;" align="center">\n\
                                            '+ divToPrint.innerHTML +'\n\
                                        </table>\n\
                                    </body>\n\
                                </html>');
        popupWin.document.close();
    }
</script>