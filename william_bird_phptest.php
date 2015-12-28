class dataTable{
	private $data = array(
		array('name'=>'Blaine Jones','state'=>'AZ','company'=>'Media Solutions',
			'phone'=>array(
				'cell'=>'4805550001',
				'office'=>'4806391200'
			),
			'email'=>array(
				'primary'=>'bjones@mediasolutionscorp.com',
				'me@there.com'
			)
		),
		array('name'=>'Joe Smith','city'=>'Phoenix','phone'=>'4805551111','email'=>'jsmith@some_email.com'),
		array('name'=>'John Doe','city'=>'Chandler','company'=>'Doe Co.','email'=>array('jdoe@gmail.com','personal'=>'email@email.com'),'phone'=>'6025550002')
	);

}



<?php  


 
echo "<table border=\"1\" cellpadding=\"5\">";


echo "<tr>";
echo "<td><b>Name<b></td>";
echo "<td><b>Company</b></td>";
echo "<td><b>City</b></td>";
echo "<td><b>State</b></td>";
echo "<td><b>Email</b></td>";
echo "<td><b>Phone</b></td>";
echo "</tr>";


echo "<tr>";

echo $data->name;




echo "</tr>";

echo "</table>";




for ($i=0; $i < count($data); $i++)
{
	    echo "<tr>";
	    for ($c=0; $c<6; $c++)
	    {
	      echo "<td>test[$i]</td>";
	    }
	    echo "</tr>";
} 

echo "</table>";

?>

