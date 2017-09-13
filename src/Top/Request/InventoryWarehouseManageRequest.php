<?php

namespace Top\Request;

/**
 * TOP API: taobao.inventory.warehouse.manage request
 * 
 * @author auto create
 * @since 1.0, 2016.07.07
 */
class InventoryWarehouseManageRequest
{
	/** 
	 * 仓库信息
	 **/
	private $wareHouseDto;
	
	private $apiParas = array();
	
	public function setWareHouseDto($wareHouseDto)
	{
		$this->wareHouseDto = $wareHouseDto;
		$this->apiParas["ware_house_dto"] = $wareHouseDto;
	}

	public function getWareHouseDto()
	{
		return $this->wareHouseDto;
	}

	public function getApiMethodName()
	{
		return "taobao.inventory.warehouse.manage";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}