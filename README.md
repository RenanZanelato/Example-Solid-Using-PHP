# Example SOLID and Strong Types on PHP

## That Examples i am using the Eduardo Pires class as example. but Eduardo Pires code is using .net core, on that example
## we used php, just to show that PHP can use the same properties.

# That creations still are in progress

# Considerations
- LSP Liskov Substitution Principle
- DIP Dependency Inversion Principle

# How to Install the project
- Clone the project
- Open the folder using PowerShell/Terminal
- Do you will need the Docker installed on your machine
- Run the command
`
	docker-compose up -d --build
`
- This will run on port 8081
- After run the docker-compose, run now: 
`
	docker exec -it "container-name" bash
`
- This will get in the container, after you will need to run
`
	composer install
`

# Test Example
`
	- http://localhost:8081?example=dip&debug=1
	- http://localhost:8081?example=lsp
`