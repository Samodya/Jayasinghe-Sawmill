<?php
require("connection.php");

class product
{

    private $PID;
    private $PCode;
    private $PName;
    private $PCatogary;
    private $Pprice;
    private $Pcover;
    private $Pdescription;


    //php constructor

    public function __construct($_pcode,$_pname,$_pcatogary,$_pprice,$_pcover,$_pdescription)
    {
        $this->PCode=$_pcode;
        $this->PName=$_pname;
        $this->PCatogary=$_pcatogary;
        $this->Pprice=$_pprice;
        $this->Pcover=$_pcover;
        $this->Pdescription=$_pdescription;
    }




    public function SetPID($_pid)
    {
        $this->PID=$_pid;

    }

    public function GetPID()
    {
        return $this->PID;
    }

    public function SetPCode($_pcode)
    {
        $this->PCode=$_pcode;

    }

    public function GetPCode()
    {
        return $this->PCode;
    }


    public function SetPName($_pname)
    {
        $this->PName=$_pname;
    }

    public function GetPName()
    {
        return $this->PName;
    }

    public function SetPCatogary($_pcatogary)
    {
        $this->PCatogary=$_pcatogary;
    }

    public function GetPCatogary()
    {
        return $this->PCatogary;
    }

    public function SetPprice($_pprice)
    {
        $this->Pprice=$_pprice;
    }

    public function GetPprice()
    {
        return $this->Pprice;
    }

    public function SetPcover($_pcover)
    {
        $this->Pcover=$_pcover;
    }

    public function GetPcover()
    {
        return $this->Pcover;
    }

    public function SetPdescription($_pdescription)
    {
        $this->Pdescription=$_pdescription;
    }

    public function GetPdescription()
    {
        return $this->Pdescription;
    }



    //DB Methods
    public function pAdd()
    {
        try {

            $conn =Connection::GetConnection();
            $query="INSERT INTO `product`( `pCode`, `pName`, 
                                `pCategory`, `pPrice`, `pCover`, `pDescription`) 
                                VALUES (:pCode,:pName,:pCategory,
                                        :pPrice,:pCover,:pDescription)"; 
             $stmt=$conn->prepare($query);
             $stmt->bindParam(":pCode",$this->PCode,PDO::PARAM_STR);
             $stmt->bindParam(":pName",$this->PName,PDO::PARAM_STR);
             $stmt->bindParam(":pCategory",$this->PCatogary,PDO::PARAM_INT);
             $stmt->bindParam(":pPrice",$this->Pprice,PDO::PARAM_INT);
             $stmt->bindParam(":pCover",$this->Pcover,PDO::PARAM_STR);
             $stmt->bindParam(":pDescription",$this->Pdescription,PDO::PARAM_STR);
             $stmt->execute();
        
        } catch (PDOException $th) {
            throw $th;
        }
    }


    public static function pGetProducts()
    {

        try {
            
            $conn =Connection::GetConnection();
            $query="SELECT `PID`, `pCode`, `pName`, `pCategory`,
                     `pPrice`, `pCover`, `pDescription` FROM `product`";

            $stmt=$conn->prepare($query);
            $stmt->execute();
            $result = $stmt-> fetchAll();

            $products = array();
            foreach($result as $value){

                $product = new product($value['pCode'],$value['pName'],$value['pCategory'],
                            $value['pPrice'],
                                $value['pCover'],$value['pDescription']);

                $product->SetPID($value['PID']);
                array_push($products,$product);
                //($_isbn,$_title,$_year,$_price,$_cover,$_description)

            }   
            return $products;  



        } catch (PDOException $th) {
        throw $th;
        }

    }


    public function pUpdate()
    {
        try {

            $conn =Connection::GetConnection();

            $query="UPDATE `product` SET `pCode`=:pCode,
                            `pName`=:pName,`pCategory`=:pCategory,
                            `pPrice`=:pPrice,`pCover`=:pCover,
                            `pDescription`=:pDescription WHERE `PID`=:PID";


            /*$query="INSERT INTO `product`( `pCode`, `pName`, 
                                `pCategory`, `pPrice`, `pCover`, `pDescription`) 
                                VALUES (:pCode,:pName,:pCategory,
                                        :pPrice,:pCover,:pDescription)";*/ 
             $stmt=$conn->prepare($query);
             $stmt->bindParam(":PID",$this->PID,PDO::PARAM_INT);
             $stmt->bindParam(":pCode",$this->PCode,PDO::PARAM_STR);
             $stmt->bindParam(":pName",$this->PName,PDO::PARAM_STR);
             $stmt->bindParam(":pCategory",$this->PCatogary,PDO::PARAM_INT);
             $stmt->bindParam(":pPrice",$this->Pprice,PDO::PARAM_INT);
             $stmt->bindParam(":pCover",$this->Pcover,PDO::PARAM_STR);
             $stmt->bindParam(":pDescription",$this->Pdescription,PDO::PARAM_STR);
             $stmt->execute();

        
        } catch (PDOException $th) {
            throw $th;
        }
    }


    public static function Delete($pid)
    {
        try {
            $conn =Connection::GetConnection();
            $query="DELETE from `product` WHERE `PID`=:PID";

            $stmt=$conn->prepare($query);
            $stmt->bindParam(":PID",$pid,PDO::PARAM_INT);
            $stmt->execute();

        } catch (PDOException $th) {
            throw $th;
        }

    }



    public static function GetProductDes($POID)
    {
        try {
            
            $conn =Connection::GetConnection();
            $query="SELECT `PID`, `pCode`, `pName`, `pCategory`,
                     `pPrice`, `pCover`, `pDescription` FROM `product` WHERE PID = $POID";

            $stmt=$conn->prepare($query);
            $stmt->execute();
            $result = $stmt-> fetchAll();

            $products = array();
            foreach($result as $value){

                $product = new product($value['pCode'],$value['pName'],$value['pCategory'],
                            $value['pPrice'],
                                $value['pCover'],$value['pDescription']);

                $product->SetPID($value['PID']);
                array_push($products,$product);
                //($_isbn,$_title,$_year,$_price,$_cover,$_description)

            }   
            return $products;  



        } catch (PDOException $th) {
            throw $th;
        }
    }







    public static function GetProDesReleted($PCATID)
    {
        try {
            
            $conn =Connection::GetConnection();
            $query="SELECT `PID`, `pCode`, `pName`, `pCategory`,
                     `pPrice`, `pCover`, `pDescription` FROM `product` WHERE pCategory = $PCATID";

            $stmt=$conn->prepare($query);
            $stmt->execute();
            $result = $stmt-> fetchAll();

            $products = array();
            foreach($result as $value){

                $product = new product($value['pCode'],$value['pName'],$value['pCategory'],
                            $value['pPrice'],
                                $value['pCover'],$value['pDescription']);

                $product->SetPID($value['PID']);
                array_push($products,$product);
                //($_isbn,$_title,$_year,$_price,$_cover,$_description)

            }   
            return $products;  



        } catch (PDOException $th) {
            throw $th;
        }
    }








    public static function GetHomeProduct()
    {
        try {
            
            $conn =Connection::GetConnection();
            $query="SELECT `PID`, `pCode`, `pName`, `pCategory`,
                     `pPrice`, `pCover`, `pDescription` FROM `product` ORDER BY PID DESC LIMIT 9";

            $stmt=$conn->prepare($query);
            $stmt->execute();
            $result = $stmt-> fetchAll();

            $products = array();
            foreach($result as $value){

                $product = new product($value['pCode'],$value['pName'],$value['pCategory'],
                            $value['pPrice'],
                                $value['pCover'],$value['pDescription']);

                $product->SetPID($value['PID']);
                array_push($products,$product);
                //($_isbn,$_title,$_year,$_price,$_cover,$_description)

            }   
            return $products;  



        } catch (PDOException $th) {
            throw $th;
        }
    }



    public static function GetLivingProduct()
    {
        try {
            
            $conn =Connection::GetConnection();
            $query="SELECT `PID`, `pCode`, `pName`, `pCategory`,
                     `pPrice`, `pCover`, `pDescription` FROM `product` WHERE pCategory =1";

            $stmt=$conn->prepare($query);
            $stmt->execute();
            $result = $stmt-> fetchAll();

            $products = array();
            foreach($result as $value){

                $product = new product($value['pCode'],$value['pName'],$value['pCategory'],
                            $value['pPrice'],
                                $value['pCover'],$value['pDescription']);

                $product->SetPID($value['PID']);
                array_push($products,$product);
                //($_isbn,$_title,$_year,$_price,$_cover,$_description)

            }   
            return $products;  



        } catch (PDOException $th) {
            throw $th;
        }
    }



    public static function GetDiningProduct()
    {
        try {
            
            $conn =Connection::GetConnection();
            $query="SELECT `PID`, `pCode`, `pName`, `pCategory`,
                     `pPrice`, `pCover`, `pDescription` FROM `product` WHERE pCategory =2";

            $stmt=$conn->prepare($query);
            $stmt->execute();
            $result = $stmt-> fetchAll();

            $products = array();
            foreach($result as $value){

                $product = new product($value['pCode'],$value['pName'],$value['pCategory'],
                            $value['pPrice'],
                                $value['pCover'],$value['pDescription']);

                $product->SetPID($value['PID']);
                array_push($products,$product);
                //($_isbn,$_title,$_year,$_price,$_cover,$_description)

            }   
            return $products;  



        } catch (PDOException $th) {
            throw $th;
        }
    }



    public static function GetBedProduct()
    {
        try {
            
            $conn =Connection::GetConnection();
            $query="SELECT `PID`, `pCode`, `pName`, `pCategory`,
                     `pPrice`, `pCover`, `pDescription` FROM `product` WHERE pCategory =3";

            $stmt=$conn->prepare($query);
            $stmt->execute();
            $result = $stmt-> fetchAll();

            $products = array();
            foreach($result as $value){

                $product = new product($value['pCode'],$value['pName'],$value['pCategory'],
                            $value['pPrice'],
                                $value['pCover'],$value['pDescription']);

                $product->SetPID($value['PID']);
                array_push($products,$product);
                //($_isbn,$_title,$_year,$_price,$_cover,$_description)

            }   
            return $products;  



        } catch (PDOException $th) {
            throw $th;
        }
    }

    public static function GetWoodProduct()
    {
        try {
            
            $conn =Connection::GetConnection();
            $query="SELECT `PID`, `pCode`, `pName`, `pCategory`,
                     `pPrice`, `pCover`, `pDescription` FROM `product` WHERE pCategory =4";

            $stmt=$conn->prepare($query);
            $stmt->execute();
            $result = $stmt-> fetchAll();

            $products = array();
            foreach($result as $value){

                $product = new product($value['pCode'],$value['pName'],$value['pCategory'],
                            $value['pPrice'],
                                $value['pCover'],$value['pDescription']);

                $product->SetPID($value['PID']);
                array_push($products,$product);
                //($_isbn,$_title,$_year,$_price,$_cover,$_description)

            }   
            return $products;  



        } catch (PDOException $th) {
            throw $th;
        }
    }

    public static function GetOUTDOORProduct()
    {
        try {
            
            $conn =Connection::GetConnection();
            $query="SELECT `PID`, `pCode`, `pName`, `pCategory`,
                     `pPrice`, `pCover`, `pDescription` FROM `product` WHERE pCategory =5";

            $stmt=$conn->prepare($query);
            $stmt->execute();
            $result = $stmt-> fetchAll();

            $products = array();
            foreach($result as $value){

                $product = new product($value['pCode'],$value['pName'],$value['pCategory'],
                            $value['pPrice'],
                                $value['pCover'],$value['pDescription']);

                $product->SetPID($value['PID']);
                array_push($products,$product);
                //($_isbn,$_title,$_year,$_price,$_cover,$_description)

            }   
            return $products;  



        } catch (PDOException $th) {
            throw $th;
        }
    }



    
    public static function GetSearch($SearchID)
    {
        try {
            
            $conn =Connection::GetConnection();
            $query="SELECT `PID`, `pCode`, `pName`, `pCategory`,
                     `pPrice`, `pCover`, `pDescription` FROM `product`
                      WHERE(`pName` LIKE '%".$SearchID."%') 
                      OR (`pDescription` LIKE '%".$SearchID."%')";

            $stmt=$conn->prepare($query);
            $stmt->execute();
            $result = $stmt-> fetchAll();

            $products = array();
            foreach($result as $value){

                $product = new product($value['pCode'],$value['pName'],$value['pCategory'],
                            $value['pPrice'],
                                $value['pCover'],$value['pDescription']);

                $product->SetPID($value['PID']);
                array_push($products,$product);
                //($_isbn,$_title,$_year,$_price,$_cover,$_description)

            }   
            return $products;  



        } catch (PDOException $th) {
            throw $th;
        }
    }


    public static function DeleteOrder($ccid)
    {
        try {
            $conn =Connection::GetConnection();
          //  $query1="DELETE from `customer_manager`  WHERE `CID`=$ccid";
            $query2="DELETE from `customer_order`  WHERE `OID`=$ccid";

          //  $stmt=$conn->prepare($query1);
            $stmt=$conn->prepare($query2);
           /* $stmt->bindParam(":CCID",$ccid,PDO::PARAM_INT);*/
            $stmt->execute();

        } catch (PDOException $th) {
            throw $th;
        }

    }


    public static function DeleteOrderC($ccid)
    {
        try {
            $conn =Connection::GetConnection();
            $query1="DELETE from `customer_manager`  WHERE `CID`=$ccid";
           

            $stmt=$conn->prepare($query1);
           
           /* $stmt->bindParam(":CCID",$ccid,PDO::PARAM_INT);*/
            $stmt->execute();

        } catch (PDOException $th) {
            throw $th;
        }

    }

    public static function DeleteReview($reid)
    {
        try {
            $conn =Connection::GetConnection();
            $query="DELETE from `customer_review`  WHERE `ReID`=$reid";
           

            $stmt=$conn->prepare($query);
           
           /* $stmt->bindParam(":CCID",$ccid,PDO::PARAM_INT);*/
            $stmt->execute();

        } catch (PDOException $th) {
            throw $th;
        }

    }


    public static function Reviewupdate($rePoID)
    {
        $conn =Connection::GetConnection();
        $query ="UPDATE `customer_review` SET `Permission`='1' where `ReID`=$rePoID ";

				$stmt=$conn->prepare($query);
				$stmt->execute();
				//$result = $stmt-> fetchAll();

    }


    public static function ReviewNoupdate($reNoPoID)
    {
        $conn =Connection::GetConnection();
        $query ="UPDATE `customer_review` SET `Permission`='0' where `ReID`=$reNoPoID ";

				$stmt=$conn->prepare($query);
				$stmt->execute();
				//$result = $stmt-> fetchAll();

    }








}








?>