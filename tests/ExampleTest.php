<?php

namespace Wahlemedia\Utilities\Tests;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Event;
use Wahlemedia\Utilities\Models\Concerns\HasUuid;

class ExampleTest extends TestCase
{


    public function test_returns_the_uuid_model_field()
    {
        $this->assertEquals( 'uuid', TestModel::uuidField());
    }

    public function test_the_default_uuid_field_can_be_overwritten()
    {
        $this->assertEquals( 'testUuid', TestModelUuid::uuidField());
    }

//    public  function test_model_should_contain_a_uuid_field()
//    {
//        Event::fake();
//
//        $model = TestModel::create();
//
//        dd($model->toArray());
//
//    }
}

class TestModel extends Model {
    use HasUuid;

    protected $table = 'test';

    protected $guarded = [];
}

class TestModelUuid extends Model {
    use HasUuid;

    protected static function uuidField(): string
    {
        return 'testUuid';
    }
}
