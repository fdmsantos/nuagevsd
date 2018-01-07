<?php

namespace Vsd\Test;

class EnterprisesTest extends VsdTest
{
	private $enterpriseName = 'NuageVSDTest';
	private $enterpriseDescripton = 'PHP SDK Nuage VSD Test';

	public function setUp()
    {
        parent::setUp();
    }

    public function test_it_creates()
    {
        $enterprise = $this->vsd->enterprises()->create([
			'name' => $this->enterpriseName,
			'description' => $this->enterpriseDescripton,
        ]);

        $this->assertNotNull($enterprise->id);
        $this->assertEquals($enterprise->name,$this->enterpriseName);
        $this->assertEquals($enterprise->description,$this->enterpriseDescripton);
    }

    public function test_it_get()
    {
    	$id = '';
    	foreach ($this->vsd->enterprises()->list(['name' => $this->enterpriseName]) as $enterprise) {
			if ($enterprise->name == $this->enterpriseName) {
				$id = $enterprise->id;
			}
		}

		$enterprise = $this->vsd->enterprises()->get($id);
        $this->assertEquals($enterprise->id,$id);
        $this->assertEquals($enterprise->name,$this->enterpriseName);
        $this->assertEquals($enterprise->description,$this->enterpriseDescripton);
    }

    public function test_it_list()
    {
   		foreach ($this->vsd->enterprises()->list() as $enterprise) {
   			$this->assertNotNull($enterprise->id);
			$this->assertNotNull($enterprise->name);
			if ($enterprise->name == $this->enterpriseName) {
        	    $this->assertEquals($enterprise->name, $this->enterpriseName);
        	    $this->assertEquals($enterprise->description, $this->enterpriseDescripton);
			}
		}
    }

    public function test_it_update()
    {
    	$description = 'Nuage SDK Test New Description';
    	$id = '';
   		foreach ($this->vsd->enterprises()->list(['name' => $this->enterpriseName]) as $enterprise) {
			if ($enterprise->name == $this->enterpriseName) {
				$enterprise->description = $description;
				$enterprise->update();
				$id = $enterprise->id;
			}
		}
		$enterprise = $this->vsd->enterprises()->get($id);
		$this->assertEquals($enterprise->description, $description);
    }

    public function test_it_delete()
    {
    	$this->expectException(\GuzzleHttp\Exception\ClientException::class);
    	$id = '';
   		foreach ($this->vsd->enterprises()->list(['name' => $this->enterpriseName]) as $enterprise) {
			if ($enterprise->name == $this->enterpriseName) {
				$id = $enterprise->id;
				$enterprise->delete();
			}
		}
		$enterprise = $this->vsd->enterprises()->get($id);
    }

}