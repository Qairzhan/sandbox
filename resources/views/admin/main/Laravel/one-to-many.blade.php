@extends('admin.layout.admin')

@section('content')

    <div class="card-columns" style="margin-left: 20px">
        <div class="card bg-primary">
            <div class="card-body text-center">
                <p>Table : 1</p>
                <p class="card-text">
                    <p>public function up() {</p>
                    Schema::create('clients', function (Blueprint $table) {
                    $table->id();
                    $table->text('fullname');
                    $table->timestamps();
                    });
                    }
                </p>
            </div>
        </div>
        <div class="card bg-primary">
            <div class="card-body text-center">
                <p>Table : 2</p>
                <p class="card-text">
                <p>public function up() {</p>
                    Schema::create('orders', function (Blueprint $table) {
                    $table->id();
                    $table->text('product_name');
                    $table->unsignedBigInteger('client_id')->nullable();
                    $table->foreign('client_id','client_order_fk')->on('clients')->references('id');
                    $table->timestamps();
                    });
                    }
                </p>
            </div>
        </div>
        <div class="card bg-warning">
            <div class="card-body text-center">
                <p>Model 1</p>
                <p class="card-text">
                    <p>class Client extends Model
                    {
                    protected $fillable = ['name','order_id'];

                    public function get_orders(){
                    return $this->hasMany(Order::class,'client_id','id');
                    }
                    }
                </p>
            </div>
        </div>
        <div class="card bg-warning">
            <div class="card-body text-center">
                <p>Model 1</p>
                <p class="card-text">
                    class Order extends Model
                    {
                    protected $fillable = ['product_name'];

                    public function get_client(){
                    return $this->belongsTo(Client::class,'client_id','id');
                    }
                    }
                </p>
            </div>
        </div>
        <div class="card bg-success">
            <div class="card-body text-center">
                <p>Controller</p>
                <p class="card-text">
                    class ProductController extends Controller
                    {
                    public function index(){
                    $student = Student::find(1);
                    $order = Order::find(4);

                    dd($student->subjects);
                    //            dd($client->get_orders);
                    }
                    }</p>
            </div>
        </div>

    </div>

@endsection
