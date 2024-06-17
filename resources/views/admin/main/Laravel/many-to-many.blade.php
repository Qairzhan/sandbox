@extends('admin.layout.admin')

@section('content')

    <div class="card-columns" style="margin-left: 20px">
        <div class="card bg-primary">
            <div class="card-body text-center">
                <p>Table : 1</p>
                <p class="card-text">
                <p>public function up() {</p>
                Schema::create('students', function (Blueprint $table) {
                $table->id();
                $table->text('fullname');
                $table->timestamps();
                });
                </p>
            </div>
        </div>
        <div class="card bg-primary">
            <div class="card-body text-center">
                <p>Table : 2</p>
                <p class="card-text">
                <p>public function up() {</p>
                Schema::create('subjects', function (Blueprint $table) {
                $table->id();
                $table->text('subject_name');
                $table->timestamps();
                });
                </p>
            </div>
        </div>
        <div class="card bg-primary">
            <div class="card-body text-center">
                <p>Pivot table : </p>
                <p class="card-text">
                <p>public function up() {</p>
                Schema::create('subjects', function (Blueprint $table) {
                $table->id();
                $table->text('subject_name');
                $table->timestamps();
                });
                </p>
            </div>
        </div>
        <div class="card bg-warning">
            <div class="card-body text-center">
                <p>Model 1</p>
                <p class="card-text">
                <p>class Student extends Model
                    {
                    protected $fillable = ['fullname'];

                    public function subjects(){
                    return $this->belongsToMany(Subject::class,'student_subject_pivot_table','student_id','subject_id');
                    }
                    }
                </p>
            </div>
        </div>
        <div class="card bg-warning">
            <div class="card-body text-center">
                <p>Model 2</p>
                <p class="card-text">
                    class Subject extends Model
                    {
                    protected $fillable = ['subject_name'];

                    public function students(){
                    return $this->belongsToMany(Student::class,'student_subject_pivot_table','subject_id','student_id');
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
