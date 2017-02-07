<?php
ini_set('max_execution_time', 300);

use Aws\S3\S3Client;
use Aws\Credentials\Credentials;
use Aws\S3\Exception\S3Exception;

class Controller_Amazon extends Controller {

	public function action_list_s3(){
		$bucket = 'hml-beanstalk';

		$credentials = new Credentials(
		    Kohana::$config->load('amazon.account.'.$bucket.'.access_key'),
		    Kohana::$config->load('amazon.account.'.$bucket.'.secret_key')
		);

		$s3 = S3Client::factory(array(
		        'version'   => 'latest',
		        'region'   => 'us-west-2',
		        'credentials' => $credentials,
		));

		try {
		    // Upload data.
		    $result = $s3->putObject(array(
		        'Bucket' => $bucket,
		        'Key'    => 'investimentos/upload/logo_asset_priv.jpg',
		        'Body'   => fopen('assets/img/logo_asset.jpg', 'r'),
		        //'ACL'    => 'public-read'
		        //'ACL'    => 'private'
		        'ACL'    => 'public-read'
		    ));

		    // Print the URL to the object.
		    echo $result['ObjectURL'] . "\n";
		} catch (S3Exception $e) {
		    echo $e->getMessage() . "\n";
		}

	}

	public function action_s3()
	{
		$public_read = false;
		$s3 = new Amazon_S3('hml-beanstalk');
		echo Debug::vars($s3->upload('assets/img/logo_asset.jpg', 'investimentos/upload/logo_asset_priv.jpg', $public_read));
	}

	public function action_sqs()
	{
		$sqs = new Amazon_SQS;

		$url = 'http://queue.amazonaws.com/inputqueue';

		echo Kohana::debug($sqs->listQueues());
		echo Kohana::debug($sqs->getSize($url));
		echo Kohana::debug($sqs->receiveMessage(1, NULL, $url));
	}

	public function action_listbuckets()
	{
		$s3 = new Amazon_S3('hml-beanstalk');
		echo Debug::vars($s3->getBucketContents('hml-beanstalk'));
	}

}