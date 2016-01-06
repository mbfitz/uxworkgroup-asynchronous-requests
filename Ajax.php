<?php
	namespace App;

	class Ajax
	{
		public function getImages($paginate)
		{

			$array = [];
			$files = scandir('./img');

			// loop through files in directory
			foreach ($files as $index => $file) {
				// filter out dots
				if ($file != '.' && $file != '..') {
					$array[] = [
						'url'         => '/img/' . $file,
						'description' => 'This is an image of ' . preg_replace('/\\.[^.\\s]{3,4}$/', '', $file),
					];
				}
			}

			// get groups of images
			$start = ($paginate - 1) * 4;
			$array = array_slice($array, $start, 4);

			return json_encode($array);
		}
	}