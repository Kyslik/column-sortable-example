# Example application using [column-sortable package](https://github.com/Kyslik/column-sortable)

In order to see example on your machine: 
 1. set up **.env** file and fill out database information
 2. run migrations with seeds `$ php artisan migrate --seed`
 3. open up browser and navigate to `/`, or `/users` or `/user-details`
 
If you want to use submodule version (in packages/column-sortable) us PSR-4 autoloading: 
 
	 "psr-4": {
		 "App\\": "app/",
		 "Kyslik\\ColumnSortable\\": "packages/column-sortable/src/ColumnSortable/"
	 }

else require `"kyslik/column-sortable: 5.6.*"` and let auto-discover.
