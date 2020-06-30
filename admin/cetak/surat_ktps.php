<?php require_once('../Connections/koneksi.php'); ?>
<?php require_once('hak_akses.php'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<TITLE>CETAK SURAT KETERANGAN KTPS</TITLE>
	<META NAME="GENERATOR" CONTENT="LibreOffice 4.1.6.2 (Linux)">
	<META NAME="AUTHOR" CONTENT="Micrososoft">
	<META NAME="CREATED" CONTENT="20090224;12600000000000">
	<META NAME="CHANGEDBY" CONTENT="Nya-Tan">
	<META NAME="CHANGED" CONTENT="20200602;145100000000000">
	<STYLE TYPE="text/css">
	<!--
		@page { margin-right: 1in; margin-top: 0.79in; margin-bottom: 0.28in }
		P { margin-bottom: 0.08in; direction: ltr; color: #000000; widows: 2; orphans: 2 }
		P.western { font-family: "Times New Roman", serif; font-size: 12pt; so-language: en-US }
		P.cjk { font-family: "Times New Roman", serif; font-size: 12pt }
		P.ctl { font-family: "Times New Roman", serif; font-size: 12pt; so-language: ar-SA }
		H3 { margin-top: 0in; margin-bottom: 0in; direction: ltr; color: #000000; text-align: center; widows: 2; orphans: 2; text-decoration: underline }
		H3.western { font-size: 12pt; so-language: en-US }
		H3.cjk { font-family: "Times New Roman", serif; font-size: 12pt }
		H3.ctl { font-family: "Times New Roman", serif; font-size: 12pt; so-language: ar-SA }
	-->
	</STYLE>
</HEAD>
<style type="text/css">
    body {
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 5pt "Times New Roman";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 21cm;
        min-height: 29.7cm;
        padding: 2cm;
        margin: 0.5cm auto;
        border: 1px ;
        border-radius: 1px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 0.5cm;
        border: px red solid;
        height: 256mm;
        outline: 2cm ;
    }
    
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>
<style type="text/css">
   .line1 { font-size:16px; }
   .line2 { font-size:16px; line-height: 15px;}
   .line3 { font-size:16px; line-height: 1em;}
   .line4 { font-size:16px; line-height: 2;}
</style>
<BODY LANG="en-US" TEXT="#000000" DIR="LTR">
<div class="book">
    <div class="page">
        <div class="subpage">
<TABLE WIDTH=100% CELLPADDING=7 CELLSPACING=0 STYLE="page-break-before: always">
	<COL WIDTH=88>
	<COL WIDTH=496>
	<TR VALIGN=TOP>
		<TD WIDTH=116 STYLE="border: none; padding: 0in">
			<P LANG="en-US" CLASS="western" ALIGN=CENTER><span class="sd-abs-pos" style="position: absolute; top: 0in; left: 0.01in; width: 117px"></span><img src="logo.png" name="Picture 1" width=117 height=112 border=0><BR>
			</P>
		</TD>
		<TD WIDTH=408 class="line3" STYLE="border: none; padding: 0in">
			<P ALIGN=CENTER> <span class="line22"><FONT SIZE=5><B>PEMERINTAH KABUPATEN KAPUAS</B></FONT></span></P>
			<P ALIGN=CENTER> <span class="line22"><FONT SIZE=5><B>KECAMATAN TAMBAN CATUR</B></FONT></span></P>
			<P ALIGN=CENTER class="line22"><FONT SIZE=5 STYLE="font-size: 20pt" ><B>DESA TAMBAN JAYA</B></FONT></P>
			<P ALIGN=CENTER class="line22"><FONT SIZE=2 STYLE="font-size: 11pt"><I><B>Alamat: Jl. Desa Tamban Jaya Km.21 RT.07 RW.02 Kode Pos73582</B></I></FONT></P>
		</TD>
	</TR>
</TABLE>
<?php
mysql_select_db($database_koneksi, $koneksi);
$tampil="SELECT * FROM ktps WHERE id=$_GET[cetak]";
$query=mysql_query($tampil,$koneksi) or die (mysql_error());
$r= mysql_fetch_assoc($query);
do { ?>
<P LANG="id-ID" CLASS="western" STYLE="margin-bottom: 0in; border-top: none; border-bottom: 4.50pt double #000000; border-left: none; border-right: none; padding-top: 0in; padding-bottom: 0.07in; padding-left: 0in; padding-right: 0in"></P>
<H3 LANG="id-ID" CLASS="western" STYLE="margin-top: 0.08in"></H3>
<H3 LANG="en-US" CLASS="western" STYLE="margin-top: 0.06in"><FONT SIZE=4 STYLE="font-size: 16pt">SURAT
KETERANGAN PENDUDUK</FONT></H3>
<blockquote>
  <blockquote>
    <blockquote>
      <blockquote>
        <p class="western" style="margin-top: 0.06in" lang="en-US"><FONT SIZE=4 STYLE="font-size: 12pt">No. Surat : <?php echo "$r[no_surat]"; ?></FONT></p>
      </blockquote>
    </blockquote>
  </blockquote>
</blockquote>
<P CLASS="western" ALIGN=JUSTIFY STYLE="text-indent: 0.39in; margin-bottom: 0in; line-height: 115%">
  Yang bertanda tangan dibawah ini adalah Kepala Desa Tamban Jaya
Kecamatan Tamban Catur Kabupaten Kapuas Kalimantan Tengah,
Menerangkan :</P>
<DL>
  <DD>
	<TABLE WIDTH=100% CELLPADDING=7 CELLSPACING=0>
		<COL WIDTH=188>
		<COL WIDTH=8>
		<COL WIDTH=336>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL>
					<LI><P><span class="line2">Nama Lengkap</span></P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P><span class="line2">:</span></P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P><span class="line2"><?php echo "$r[nama]"; ?></span></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=2>
					<LI><P><span class="line2">NIK</span></P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P><span class="line2">:</span></P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P><span class="line2"><?php echo "$r[nik]"; ?></span></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=3>
					<LI><P><span class="line2">Jenis Kelamin</span></P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P><span class="line2">:</span></P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P><span class="line2"><?php echo "$r[jenkel]"; ?></span></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=4>
					<LI><P><span class="line2">Tempat/Tgl Lahir</span></P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P><span class="line2">:</span></P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P><span class="line2"><?php echo "$r[tempat]/$r[tgl]"; ?></span></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=5>
					<LI><P><span class="line2">Agama</span></P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P><span class="line2">:</span></P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P><span class="line2"><?php echo "$r[agama]"; ?></span></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=6>
					<LI><P><span class="line2">Status Perkawinan</span></P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P><span class="line2">:</span></P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P><span class="line2"><?php echo "$r[stts]"; ?></span></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=7>
					<LI><P><span class="line2">Pekerjaan</span></P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P><span class="line2">:</span></P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P><span class="line2"><?php echo "$r[pekerjaan]"; ?></span></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=8>
					<LI><P><span class="line2">Alamat</span></P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P><span class="line2">:</span></P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P><span class="line2"><?php echo "$r[alamat] RT.$r[rt]/RW.$r[rw]"; ?> Kec. Tamban Catur, Kab. Kapuas KALTENG</span></P>
			</TD>
		</TR>
	</TABLE>  
</DL>
<P CLASS="western" ALIGN=JUSTIFY STYLE="text-indent: 0.39in; margin-bottom: 0in; line-height: 115%">
  Bahwa yang bernama tersebut diatas benar – benar bertempat tinggal seperti alamat tersebut. Surat keterangan ini diberikan sebagai bahan untuk keperluan <?php echo "$r[keperluan],"; ?> karna KTP yang bersangkutan masih dalam proses. </P>
<P CLASS="western" ALIGN=JUSTIFY STYLE="text-indent: 0.39in; margin-bottom: 0in; line-height: 115%">
Demikian Surat Keterangan  ini dibuat agar dapat di ketahui dan  dipergunakan sebagai mana mestinya.</P>
<table width="100%" border="0">
  <tr>
    <td width="62%">&nbsp;</td>
    <td width="38%"><p align="center">Tamban Baru Jaya, <?php echo date ('d M Y') ?> <br>
      Kepala Desa Tamban Jaya</p>
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <h3 align="center">ISWANTO </h3></td>
  </tr>
</table>
<P CLASS="western" ALIGN=JUSTIFY STYLE="text-indent: 0.39in; margin-bottom: 0in; line-height: 115%">&nbsp;</P>
      </div>
</div>
</div>
<?php }while ($r= mysql_fetch_assoc($query)); ?>
</BODY>
</HTML>
<script type="text/javascript">window.print();</script>