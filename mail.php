<?php
if (isset ($name))
{
$name = substr($name,0,35); //�� ����� ���� ����� 20 ��������
if (empty($name))
{
echo "<center><b>�� ������� ��� !!!<p>";
echo "<a href=index.html>��������� � ��������� ��������� �����.</a>";
exit;
}
}
else
{
$name = "�� �������";
}
if (isset ($email))
{
$email = substr($email,0,35); //�� ����� ���� ����� 35 ��������
if (empty($email))
{
echo "<center><b>�� ������ e-mail !!!<p>";
echo "<a href=index.php>��������� � ��������� ��������� �����.</a>";
exit;
}
}
else
{
$email = "�� �������";
}
if (isset ($mess))
{
$mess = substr($mess,0,1000); //�� ����� ���� ����� 1000 ��������
if (empty($mess))
{
echo "<center><b>��������� �� �������� !!!<p>";
echo "<a href=index.html>��������� � ��������� ��������� �����.</a>";
exit;
}
}
else
{
$mess = "�� �������";
}
$i = "�� �������";
if ($name == $i AND $email == $i AND $mess == $i)
{
echo "������ ! ������� �� ���� �������� ��������� !";
exit;
}
$to = "eldaro103@gmail.com";  /*������� �� ���� ������!*/
$subject = "��������� � ������ ��������-�����";
$message = "��� ����������:$name::::::::::����������� �����:$email::::::::::���������:$mess:::::::::IP-�����:$REMOTE_ADDR";
mail ($to,$subject,$message) or print "�� ���� ��������� ������ !!!";
echo "<center><b>������� �� �������� ������ ���������<a href=index.php>�������</a>, ��� �� ��������� �� �������...>";
exit;
?>