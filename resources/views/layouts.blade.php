<!DOCTYPE html>
<html>
<head>
	<title>AI - KNN - Penerimaan Modal</title>
	<link rel=stylesheet href="{{ asset('Semantic-UI/semantic.min.css') }}">
	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('Semantic-UI/semantic.min.js') }}"></script>
	<style type="text/css">
		.pagination {
			position: relative;
			float: right;
		}
		.pagination .page-item {
			list-style: none;
			display: inline-block;
			width: 50px;
			height: 50px;
			line-height: 50px;
			text-align: center;
			font-size: 11pt;
			font-weight: 600;
			background-color: #f5f5f5;
			color: #555;
		}
		.pagination .page-item a {
			width: 50px;
			height: 50px;
			line-height: 50px;
			text-align: center;
			display: block;
			color: #888;
		}
		.pagination .page-item a:hover {
			background-color: #f3f3f3;
			color: #555;
		}
		.pagination .page-item.active {
			background-color: #fff;
			color: #555;
		}
		.pagination .page-item.disabled {
			background-color: #fff;
		}
	</style>
</head>
<body>
	<div>
		<div class="ui borderless menu">
    		<div class="ui very container">
    			<div class="item">
    				<a href="{{ route('main-page') }}" class="ui teal button">
    					<i class="users icon"></i>
    					Data Penerima Modal
    				</a>
    			</div>
    			<div class="right item">
    				<a href="{{ route('main-cluster') }}" class="ui positive button">
    					<i class="plus circle icon"></i>
    					Buat Cluster
    				</a>
    				<div style="padding: 5px;"></div>
    				<a href="{{ route('main-create') }}" class="ui blue button">
    					<i class="plus circle icon"></i>
    					Tambah Penerima Modal
    				</a>
    			</div>
			</div>
		</div>
		<div class="ui container">
			@yield('content')
		</div>
	</div>
</body>
</html>