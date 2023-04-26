<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todoアプリ</title>
  @livewireStyles
</head>
<style>
body{
  background-color:#000080;
  height:0px;
  }

 
.card { margin:100px auto;
        background-color:white;
        width:54%;
        height:100%;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0,0,0,.2);
      }

 p { 
  font-size:25px;
  font-weight:bold;
  margin-left:30px;
  margin-bottom:-3px;
   }

.table { 
  width:100%;
  margin:30px auto;
  margin-left:30px;
  margin-top:40px;
  line-height: 3;
   }
.new 
  { 
  margin:10px auto;
   }

.input-update 
    { 
    width:75%;
    margin-left:30px;
    height:35px; 
    border-radius: 4px;
    border: 2px solid #13f1fc;
    }
.input-update:focus 
   { 
   outline: none;
   border: 2px solid #13f1fc;
        }
.update 
    {
    height:37px;  
    width:58px;
    border-radius: 5px;
    margin-left:60px;
    color:#CC33FF;
    border: 2px solid #CC33FF;
    font-size:12px;
    font-weight:bold;
    background-color:white;
     }
.update:hover 
      { 
       background-color:#CC33FF;
       color:white;
      }
.updatebtn 
      { 
       height:40px;  
       width:60px;
       border-radius: 8px;
       color:	#CC3300;
       border: 2px solid 	#CC3300;
       font-weight:bold;
       background-color:white;
      }
.updatebtn:hover 
      { 
       background-color:#CC3300;
       color:white;
      }
.ProductTable 
      {
        width:90%;
        border-collapse: separate;
        border-spacing: 30px 0px;
      }
.taskname
      { 
      width: 40%;
      }
.sakuseibi
      { 
      font-size:16px;
      }
      
.th
     { 
      margin-left:90px;
     }
    

.deletebtn 
    { 
      height:40px;  
      width:60px;
      border-radius: 8px;
      color:#13f1fc;
      border: 2px solid #13f1fc;
      font-weight:bold;
      background-color:white;
      }
.deletebtn:hover 
    { 
      background-color:#13f1fc;
      color:white;
    }
.input
     {
      width:100%;
      height:20px; 
      border-radius: 4px;
      outline: solid 2px green;
      border-collapse: separate;
     }

         
</style>
<body>
  <div class="all">
     <div class="card">
        <p>Todo List</p>
      <div class="new">
      @livewire('fruit')
      </div>
       <div class="table">
        <table class="ProductTable">
         @csrf 
         <tr>
            <th>作成日</th>
            <th class="taskname">タスク名</th>
            <th class="kousinn">更新</th>
            <th class="sakujyo">削除</th>
         </tr>
        @foreach ($tasks as $task)   
          <tr>
           <td class="sakuseibi">
             {{ $task->created_at }}
           </td> 
          <form action="{{ route('todo.new', [ 'id' => $task->id]) }}" method="post"> 
            @csrf 
           <td>
            <input type="text" class="input" value= "{{ $task->name }}" name="name">  
           </td>
           <td>
            <button type="submit" class="updatebtn" >更新</button> 
           </td>
          </form> 
           <td>
            <form action="{{ route('todo.destroy', [ 'id' => $task->id]) }}" method="post"> 
             @csrf 
             <button type="submit" class="deletebtn">削除</button> 
            </form> 
           </td>
         </tr>
        @endforeach
       </table>
       </div> 
     </div>
  </div>
@livewireScripts
</body>
</html>
