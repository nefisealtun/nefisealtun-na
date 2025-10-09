<%
' Request.Form ile POST verisi yakalanır.
Dim fname
Dim lname

fname = Request.Form("fname") 
lname = Request.Form("lname") 

Response.Write("<h3>POST Cevabı</h3>")
Response.Write("<p>Gönderilen İsim: " & fname & "</p>")
Response.Write("<p>Gönderilen Soyisim: " & lname & "</p>")
%>