<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
eyJpdiI6InljeFwvVXhNakswQlBWZFhXOFVYSFpRPT0iLCJ2YWx1ZSI6InBndzR5bkhSR3JMMEVSenI4QWFsQVBoa0w5WTI2WmduZ2oxRjZYc01nNHM9IiwibWFjIjoiZTg0MGIxMWYwNDFlNzkwNTkyNWY4NGM1N2UyMGM5MDM3YTBmNWJkMzkyZGM2YzQ2OTUxOWI5ZDAxZTk4NmJlZiJ9
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(function(){
        $.ajax({ 
			url:'http://kyleapi.oo/api/sm/sm4_decrypt',
			type:"POST",
			cache: false,
			dataType: 'JSON',
			data:{ 
                id: "cZKytrTAGLPjRLivRkSc",
                secret: "tfxqJoUXWXeeScdQrLbHPYJtmWDNRF",
                data: "eyJpdiI6InljeFwvVXhNakswQlBWZFhXOFVYSFpRPT0iLCJ2YWx1ZSI6InBndzR5bkhSR3JMMEVSenI4QWFsQVBoa0w5WTI2WmduZ2oxRjZYc01nNHM9IiwibWFjIjoiZTg0MGIxMWYwNDFlNzkwNTkyNWY4NGM1N2UyMGM5MDM3YTBmNWJkMzkyZGM2YzQ2OTUxOWI5ZDAxZTk4NmJlZiJ9"
			},
			success:function(data) {
				if(!data['status']){
                    console.log(data);
					alert(data['message']);
				}else{
                    console.log(data);                    
					alert(data['message']);
				}
				
			},
			error:function() { 
				//系统错误
				console.log('系统错误');
			}
		});    
    })
</script>
</html>