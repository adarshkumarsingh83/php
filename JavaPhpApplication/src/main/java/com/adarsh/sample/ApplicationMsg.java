package com.adarsh.sample;

import com.google.gson.Gson;

import java.util.Date;
import java.util.HashMap;
import java.util.Map;


public class ApplicationMsg {

	private final Gson gson = new Gson();
	
	public String getMsg(final String msg) {
		return msg +"  " + new Date();
	}

	
	public Map getJson(String msg){
		return (HashMap)gson.fromJson(msg,HashMap.class);
	}
	
}
