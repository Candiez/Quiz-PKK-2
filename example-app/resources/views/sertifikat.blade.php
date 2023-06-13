<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="icon" href="img/gurita.png">
	<title>Skillvull - Sertifikat</title>
</head>
<body>
	<div style="border: 10px solid #618597; width: 900px; padding: 10px;background-color: #618597;">
		<div style="width:840px; height:600px; padding:20px; text-align:center; border: 10px solid white;">
			<div style="width:790px; height:550px; padding:20px; text-align:center; border: 5px solid #618597;background-color: white;">
				<img src="img/logo.png" height="60"><br>
				<span style="font-size:40px; font-weight:bold">Sertifikat Skillvull</span>
				<br><br>
				<span style="font-size:25px"><i>Ini adalah untuk menyatakan bahwa</i></span>
				<br><br>
				<span style="font-size:25px"><b>{{ auth()->user()->username }}</b></span><br/><br/>
				<span style="font-size:20px"><i>telah menyelesaikan materi dengan nilai {{ auth()->user()->soal->nilai }}</i></span> <br/><br/>
				<span style="font-size:25px">Skillvull</span> <br/><br/>
				<span style="font-size:20px"><i>Waktu menyelesaikan</i></span>
				<h2 style="font-weight: normal;-weight: none">{{ explode(' ',auth()->user()->soal->updated_at)[0] }}</h2>
				<div style="width: 100%">
					<div style="float: right">
						<img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Tanda_tangan_bapak.png" height="100">
						<br>
						<span>Deni Johannurdin</span>
						<hr>
						<span>Direktur Utama</span>
					</div>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">
	window.print();
</script>
</body>
</html>