<?php
// samples data
$users = Array({
	id => 1,
	name => 'User A'
},
{
	id => 2,
	name => 'User B'
},
{
	id => 3,
	name => 'User C'
});

$items = [{
	id => 1,
	name => 'iPhone 11',
	start_price => 200,
	increase_amount => 10
},
{
	id => 2,
	name => 'SS Note 10',
	start_price => 100,
	increase_amount => 5
},
{
	id => 3,
	name => 'SS Note 9',
	start_price => 150,
	increase_amount => 8
}];

$bids = [{
	userId: 1,
	itemId: 1,
	price: 400
},
{	
	userId: 2,
	itemId: 1,
	price: 300
},
{	
	userId: 3,
	itemId: 1,
	price: 200
}];


foreach ($items as $item) {
	print_r($item);
}
?>
