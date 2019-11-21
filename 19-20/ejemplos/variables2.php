<HTML>

<HEAD>
  <TITLE>Variables en Coma Flotante</TITLE>
</HEAD>

<BODY>
  <CENTER>
    <H2>Formatos de los números en coma flotante</H2>
    <TABLE BORDER="1" CELLPADDING="2" CELLSPACING="2">
      <TR ALIGN="right">
        <TD BGCOLOR="yellow">Estándar</TD>
        <TD>
          <?php
          $num = 2.589; //formato estándar
          echo $num;    //mostramos el valor de $num
          ?>
        </TD>
      </TR>
      <TR ALIGN="right">
        <TD BGCOLOR="yellow">Científico (1.5e2)</TD>
        <TD>
          <?php
          $num = 1.5e2; //formato científico
          echo $num;    //mostramos el valor de $num
          ?>
        </TD>
      </TR>
    </TABLE>
  </CENTER>
</BODY>

</HTML>