<?php

class Correio
{
	private $url = "https://www.correio24horas.com.br/rss/";

	public function show()
	{
		$json = $this->convert_to_json();
		$data = json_decode($json, true);
		return $data;
	}

	public function get_data()
	{
		$xml = file_get_contents($this->url);
		return $xml;
	}

	public function convert_to_json()
	{
		$xml = $this->get_data();
		$data_string = simplexml_load_string($xml, "SimpleXMLElement", LIBXML_NOCDATA);
		$json = json_encode($data_string);
		return $json;
	}

	public function sort_by_name_ascending()
	{
		$json = $this->convert_to_json();
		$data = json_decode($json, true);

		usort($data['channel']['item'], function ($a, $b) {
			if ($a['title'] == $b['title'])
				return 0;

			return ($a['title'] < $b['title']) ? -1 : 1;
		});

		return $data;
	}

	public function sort_by_name_descending()
	{
		$json = $this->convert_to_json();
		$data = json_decode($json, true);

		usort($data['channel']['item'], function ($a, $b) {
			if ($a['title'] == $b['title'])
				return 0;

			return ($a['title'] > $b['title']) ? -1 : 1;
		});

		return $data;
	}

	public function sort_by_ascending_day()
	{
		$json = $this->convert_to_json();
		$data = json_decode($json, true);

		usort($data['channel']['item'], function ($a, $b) {
			if ($a['pubDate'] == $b['pubDate'])
				return 0;

			return ($a['pubDate'] < $b['pubDate']) ? -1 : 1;
		});

		return $data;
	}

	public function sort_by_descending_day()
	{
		$json = $this->convert_to_json();
		$data = json_decode($json, true);

		usort($data['channel']['item'], function ($a, $b) {
			if ($a['pubDate'] == $b['pubDate'])
				return 0;

			return ($a['pubDate'] > $b['pubDate']) ? -1 : 1;
		});

		return $data;
	}

	public function filter_by_category($param)
	{
		$json = $this->convert_to_json();
		$data = json_decode($json, true);
		$data_to_loop = $data['channel']['item'];

		foreach ($data_to_loop as $key => $value) {
			if ($value['category'] != $param) unset($data_to_loop[$key]);
		}

		$data = $data_to_loop;
		return $data;
	}

	public function filter_by_limit($param)
	{
		$json = $this->convert_to_json();
		$data = json_decode($json, true);
		$data_to_loop = $data['channel']['item'];
		$json_to_return = array();
		$i = 0;

		foreach ($data_to_loop as $key => $value) {
			if ($i < $param) {
				array_push($json_to_return, $data_to_loop[$key]);
			}
			$i++;
		}

		$data = $json_to_return;
		return $data;
	}

	public function filter_fields()
	{
		$json = $this->convert_to_json();
		$data = json_decode($json, true);
		$data_to_loop = $data['channel']['item'];
		$json_to_return = array();

		foreach ($data_to_loop as $key => $value) {
			array_push($json_to_return, array(
				'title' => $data_to_loop[$key]['title'],
				'descripition' => $data_to_loop[$key]['descripition'],
				'pubDate' => $data_to_loop[$key]['pubDate']
			));
		}

		$data = $json_to_return;
		return $data;
	}

	public function filter_text($param)
	{
		$json = $this->convert_to_json();
		$data = json_decode($json, true);
		$data_to_loop = $data['channel']['item'];
		$json_to_return = array();

		foreach ($data_to_loop as $key => $value) {
			if (strpos($data_to_loop[$key]['title'], $param) !== false) {
				array_push($json_to_return, $data_to_loop[$key]);
			} elseif (strpos($data_to_loop[$key]['descripition'], $param) !== false) {
				array_push($json_to_return, $data_to_loop[$key]);
			}
		}

		$data = $json_to_return;
		return $data;
	}
}
