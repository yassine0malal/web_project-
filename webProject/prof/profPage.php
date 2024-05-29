
<?php
    include "./connect.php";



$sql="SELECT e.Nome, e.Prenom, s.Matier, s.date ,e.absence
FROM etudiant e, prof p, seance s
WHERE e.Seance = s.`id-seance` AND s.`id-prof` = p.`id-prof`
AND e.absence = 'oui';
";


echo "<h1 style='text-aligne:center'>la list des etudiant qui ont present</h1> <br>";

$result=$conn->query($sql);

if($result->num_rows > 0)
{


    echo "<table border='1' style='border-collapse: collapse;'>
    <tr> 
        <th>  NOME D'ETUDIANT </th>
        <th>PRENOM D'ETUDIANT </th>
        <th> MATIERE &nbsp</th>
        <th> PRESENT </th>
    </tr>
    ";
    
    while($row=$result->fetch_assoc())
{
    echo "<tr>";
    echo "<td>" . $row["Nome"] ."</td>";
    echo "<td>" . $row["Prenom"]. "</td>";
    echo "<td>" . $row["Matier"]. "</td>";
    echo "<td>" . $row["absence"]. "</td>";
    echo "</tr>";

} ;
echo "</table>";
}

