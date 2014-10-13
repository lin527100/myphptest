<?php 
interface DBInterfase{
	public function connect($host,$user,$pwd,$port);
	public function query($sql);
	public function free();
}
 ?>