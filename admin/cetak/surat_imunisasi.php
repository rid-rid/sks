<?php require_once('../Connections/koneksi.php'); ?>
<?php require_once('hak_akses.php'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=utf-8">
	<TITLE>CETAK SURAT IMUNISASI</TITLE>
	<META NAME="GENERATOR" CONTENT="LibreOffice 4.1.6.2 (Linux)">
	<META NAME="AUTHOR" CONTENT="Micrososoft">
	<META NAME="CREATED" CONTENT="20090224;12600000000000">
	<META NAME="CHANGEDBY" CONTENT="Nya-Tan">
	<META NAME="CHANGED" CONTENT="20200602;145100000000000">
	<STYLE TYPE="text/css">
	<!--
		@page { margin-right: 0in; margin-top: 0in; margin-bottom: 0in }
		P { margin-bottom: 0in; direction: ltr; color: #000000; widows: 2; orphans: 2 }
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
        padding: 0.5cm;
        margin: 0cm auto;
        border: 1px ;
        border-radius: 1px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 0cm;
        border: px red solid;
        height: 256mm;
        outline: 1cm ;
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
   .line1 { font-size:12px; }
   .line2 { font-size:12px; line-height: 15px;}
   .line3 { font-size:12px; line-height: 1em;}
   .line4 { font-size:12px; line-height: 2;}
   .line5 { font-size:20pt; line-height: 15px;}
   .line6 { font-size:18pt; line-height: 15px;}
</style>
<BODY LANG="en-US" TEXT="#000000" DIR="LTR">
<div class="book">
    <div class="page">
        <div class="subpage">
<TABLE width="622" CELLSPACING=0 STYLE="page-break-before: always">
	<COL WIDTH=88>
	<COL WIDTH=496>
	<TR VALIGN=TOP>
		<TD width="139" STYLE="border: none; padding: 0in">
			<P LANG="en-US" CLASS="western" ALIGN=CENTER><span class="sd-abs-pos" style="position: absolute; top: 0in; left: 0.01in; width: 117px"></span><img src="logo.png" name="Picture 1" width=117 height=112 border=0><BR>
			</P>
		</TD>
		<TD width="477" STYLE="border: none; padding: 0in">
			<P ALIGN=CENTER> <span class="line6"><FONT SIZE=5><B>PEMERINTAH KABUPATEN KAPUAS</B></FONT></span></P>
			<P ALIGN=CENTER> <span class="line6"><FONT SIZE=5><B>KECAMATAN TAMBAN CATUR</B></FONT></span></P>
			<P ALIGN=CENTER class="line5"><FONT SIZE=5 STYLE="font-size: 20pt" ><B>DESA TAMBAN JAYA</B></FONT></P>
			<P ALIGN=CENTER><FONT SIZE=2 class="line2" STYLE="font-size: 11pt"><I><B>Alamat: Jl. Desa Tamban Jaya Km.21 RT.07 RW.02 Kode Pos73582</B></I></FONT></P>
		</TD>
	</TR>
</TABLE>
<?php
mysql_select_db($database_koneksi, $koneksi);
$tampil="SELECT * FROM imunisasi WHERE id=$_GET[cetak]";
$query=mysql_query($tampil,$koneksi) or die (mysql_error());
$r= mysql_fetch_assoc($query);
do { ?>
<P LANG="id-ID" CLASS="western" STYLE="margin-bottom: 0in; border-top: none; border-bottom: 4.50pt double #000000; border-left: none; border-right: none; padding-top: 0in; padding-bottom: 0.07in; padding-left: 0in; padding-right: 0in"></P>
<p class="line1" style="margin-top: 0.06in" lang="en-US"><FONT SIZE=4 STYLE="font-size: 12pt">No. Surat : <?php echo "$r[no_surat]"; ?></FONT></p>
<p class="line1" style="margin-top: 0.06in" lang="en-US">Lampiran &nbsp;: 1 (satu) berkas</p>
<p class="line1" style="margin-top: 0.06in" lang="en-US">Perihal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Surat Pengantar IMUNISASI</p>
<table width="100%" border="0">
  <tr>
    <td width="56%">&nbsp;</td>
    <td width="44%" align="center"><p class="line1">Kepada <br>
      Yth. Bapak / Ibu Pimpinan PUSKESMAS</p>
      <p class="line1"><em>di-</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
        Tamban Jaya</p></td>
  </tr>
</table>
<p class="line2">Assalamu'alaikum Wr. Wb.</p>
<P CLASS="line2" ALIGN=JUSTIFY STYLE="text-indent: 0.39in; margin-bottom: 0in; line-height: 115%">
  Dengan ini kami menyampaikan kepada Bapak / Ibu Pimpinan PUSKESMAS Tamban Baru seperti perihal di atas.</P>
<span class="line2"><strong><em>Atas Nama Calon Isteri :</em></strong></span>
<DL>
  <DD>
<?php
$nik_i=$r['nik_i'];
$tampil="SELECT * FROM penduduk WHERE nik='$nik_i'";
$query=mysql_query($tampil,$koneksi) or die (mysql_error());
$ri= mysql_fetch_assoc($query);
?>  
  <TABLE WIDTH=100% CELLPADDING=7 CELLSPACING=0>
		<COL WIDTH=188>
		<COL WIDTH=8>
		<COL WIDTH=336>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL>
					<LI><P class="line2">Nama Lengkap</P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">:</P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2"><?php echo "$ri[nama]"; ?></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=2>
					<LI><P class="line2">NIK</P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">:</P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2"><?php echo "$r[nik_i]"; ?></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=3>
					<LI><P class="line2">Jenis Kelamin</P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">:</P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2"><?php echo "$ri[jenkel]"; ?></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=4>
					<LI><P class="line2">Tempat/Tgl Lahir</P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">:</P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2"><?php echo "$ri[tempat]/$ri[tgl]"; ?></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=5>
					<LI>
					  <P class="line2">Bangsa/Agama</P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">:</P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">Indonesaia/<?php echo "$ri[agama]"; ?></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=6>
					<LI><P class="line2">Status Perkawinan</P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">:</P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2"><?php echo "$ri[stts]"; ?></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=7>
					<LI><P class="line2">Pekerjaan</P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">:</P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2"><?php echo "$ri[pekerjaan]"; ?></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=8>
					<LI><P class="line2">Alamat</P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">:</P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2"><?php echo "$ri[alamat] RT.$ri[rt]/RW.$ri[rw]"; ?> Kec. Tamban Catur, Kab. Kapuas KALTENG</P>
			</TD>
		</TR>
	</TABLE>  
</DL>
<span class="line2"><strong><em>Calon Suami :</em></strong></span>
<DL>
  <DD>
<?php
$nik_s=$r['nik_s'];
$tampil="SELECT * FROM penduduk WHERE nik='$nik_s'";
$query=mysql_query($tampil,$koneksi) or die (mysql_error());
$rs= mysql_fetch_assoc($query);
?>   
  <TABLE WIDTH=100% CELLPADDING=7 CELLSPACING=0>
		<COL WIDTH=188>
		<COL WIDTH=8>
		<COL WIDTH=336>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL>
					<LI><P class="line2">Nama Lengkap</P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">:</P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2"><?php echo "$rs[nama]"; ?></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=2>
					<LI><P class="line2">NIK</P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">:</P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2"><?php echo "$r[nik_s]"; ?></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=3>
					<LI><P class="line2">Jenis Kelamin</P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">:</P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2"><?php echo "$rs[jenkel]"; ?></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=4>
					<LI><P class="line2">Tempat/Tgl Lahir</P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">:</P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2"><?php echo "$rs[tempat]/$rs[tgl]"; ?></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=5>
					<LI>
					  <P class="line2">Bangsa/Agama</P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">:</P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">Indonesaia/<?php echo "$rs[agama]"; ?></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=6>
					<LI><P class="line2">Status Perkawinan</P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">:</P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2"><?php echo "$rs[stts]"; ?></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=7>
					<LI><P class="line2">Pekerjaan</P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">:</P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2"><?php echo "$rs[pekerjaan]"; ?></P>
			</TD>
		</TR>
		<TR>
			<TD WIDTH=188 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<OL START=8>
					<LI><P class="line2">Alamat</P>
				</OL>
			</TD>
			<TD WIDTH=8 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2">:</P>
			</TD>
			<TD WIDTH=336 align="left" valign="middle" STYLE="border: none; padding: 0in">
				<P class="line2"><?php echo "$rs[alamat] RT.$rs[rt]/RW.$rs[rw]"; ?> Kec. Tamban Catur, Kab. Kapuas KALTENG</P>
			</TD>
		</TR>
	</TABLE>  
</DL>
<P CLASS="line1" ALIGN=JUSTIFY>Demikian Surat Pengantar Imunisasi ini kami sampaikan agar dapat  dipergunakan sebagaimana mestinya.</P>
<table width="100%" border="0">
  <tr>
    <td width="62%">&nbsp;</td>
    <td width="38%"><p align="center" class="line1">Tamban Baru Jaya, <?php echo date ('d M Y') ?> <br>
      Kepala Desa Tamban Jaya</p>
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p>
      <h3 align="center" class="line1">ISWANTO </h3></td>
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