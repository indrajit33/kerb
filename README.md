# kerb

#POST url
	http://127.0.0.1:8000/api/v1/test-result
	
#payload
{
	"numbers": [1,2,3,8]
}

#a) Run the unit test alone
	./vendor/bin/phpunit --filter CalculatorUnitTest
	
#b) Run the integration test alone
	 ./vendor/bin/phpunit --filter CalculatorIntegrationTest
	 
#c) Run both tests together
	./vendor/bin/phpunit