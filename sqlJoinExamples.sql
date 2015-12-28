-- Get the customer name for invoiceId = 2

SELECT first_name, last_name
FROM
	customer,
	invoice
WHERE
	customer.id = invoice.customer_id
	AND invoice.id = 2;

-- Get Customername for each invoice
SELECT first_name, last_name
FROM
	customer,
	invoice
WHERE
	customer.id = invoice.customer_id;

-- Get item name that bob, dylan has ever ordered
select 
	name, 
	description 
from 
	item,
	invoice_item,
	invoice,
	customer
WHERE	
	customer.id = invoice.customer_id
	AND invoice.id = invoice_item.invoice_id
	AND invoice_item.item_id = item.id
	AND customer.first_name = "bob"
	AND customer.last_name = "lablah";

