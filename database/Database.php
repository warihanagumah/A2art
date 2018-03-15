 <?php
 	/**
 	*Database connection class
 	*@author Warihana Gumah
 	*@version 1.0
 	**/

 	
 	//include database credentials
 	require_once('dbcredential.php');

	class Database{
		
		//properties		
		public $dbconnector;
		public $results;
		
		/**
		* A method for database connection
		*@return return rue or false
		**/
		function connect()
		{
			//store connection to dbconnector property 
			$this->dbconnector = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

			//testing connection
			if(mysqli_connect_errno())
			{
				return false;
			}else 
			{
				return true;
			}

		}


		/**
		* A method for database queries 
		*@param sql to be execued
		*@return return true or false
		**/
		function query($sql)
		{
			//check if connection is successful
			if(!$this->connect())
			{
				return false;
			}
			//run query
			$this->dbresults = mysqli_query($this->dbconnector,$sql);

			//check if any record was returned
			if($this->dbresults==false)
			{
				return false;
			}else 
			{
				return true;
			}
		}


		/**
		*database query method to fetch results
		*@return return results
		**/
		function fetch()
		{
			//check if result has content
			if($this->dbresults === false)
			{
				return false;
			}
			//return results
			return mysqli_fetch_assoc($this->dbresults);
			
		}


		

	}	
	
?>


