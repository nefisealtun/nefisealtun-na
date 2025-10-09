<%
' Query String ile gelen parametreleri ASP ile yakalama
Dim fname
Dim lname

fname = Request.QueryString("fname") ' "Henry" değerini yakalar
lname = Request.QueryString("lname") ' "Ford" değerini yakalar

Response.Write("<h2>Sunucu Cevabı</h2>")
Response.Write("<p>Gelen İsim: " & fname & "</p>")
Response.Write("<p>Gelen Soyisim: " & lname & "</p>")
%>