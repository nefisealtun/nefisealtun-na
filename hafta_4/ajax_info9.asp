<%
' Request.Form ile POST isteğiyle gelen veriler yakalanır.
Dim fname
Dim lname

fname = Request.Form("fname") 
lname = Request.Form("lname") 

Response.Write("<h3>POST Başarılı!</h3>")
Response.Write("<p>Gelen İsim: " & fname & "</p>")
Response.Write("<p>Gelen Soyisim: " & lname & "</p>")
%>