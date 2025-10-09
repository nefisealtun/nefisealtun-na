<%
' Kullanılacak olası isimlerin bir listesi
Dim a(9)
a(0)="Ali"
a(1)="Ayşe"
a(2)="Ahmet"
a(3)="Burak"
a(4)="Berna"
a(5)="Cem"
a(6)="Ceren"
a(7)="Deniz"
a(8)="Demet"
a(9)="Emre"

' Query String'den gelen 'q' parametresini yakala
Dim q
q = LCase(Request.QueryString("q"))

Dim hint, i
hint = ""

' Eğer 'q' boş değilse (kullanıcı bir şeyler yazmışsa)
If q <> "" Then
    ' Tüm isimleri döngüye al
    For i = 0 To UBound(a)
        ' İsim, kullanıcının yazdığı metinle başlıyorsa (InStr kullanarak)
        If InStr(LCase(a(i)), q) = 1 Then
            If hint = "" Then
                hint = a(i) ' İlk öneriyi al
            Else
                hint = hint & ", " & a(i) ' Diğer önerileri virgülle ekle
            End If
        End If
    Next
End If

' Eğer öneri bulunamazsa
If hint = "" Then
    Response.Write("Öneri bulunamadı")
Else
    Response.Write(hint) ' Bulunan öneri listesini geri döndür
End If
%>