<?php

class events {

	protected static $events = array();
	
	public static function exec( string $eventType, array $eventdata = array() ) {
		if( !array_key_exists($eventType, self::$events) ) return;
		foreach( self::$events[ $eventType ] as $action ) {
			$action( $eventdata, $eventType );
		};
	}
	
	public static function listener(string $eventTypes, callable $function) {
		$eventTypes = array_map('trim', explode(",", $eventTypes));
		foreach( $eventTypes as $eventType ) {
			if( !array_key_exists($eventType, self::$events) ) self::$events[ $eventType ] = array();
			self::$events[ $eventType ][] = $function;
		};
	}
	
	public static function viewlist() {
		return array_keys(self::$events);
	}

}

