/*
* Snake game
*/
$(document).ready(function() { 


var variables = {CELL_WIDTH:10,
	CELL_HEIGTH:10,    
    SNAKE_START_LENGTH:5,  
    UP:38,  
    RIGHT:39,  
    DOWN:40,  
    LEFT:37,  
    FPS_LIMIT:50};  


window.onload = function() {  
    "use strict";  
      
    // start game  
    var game = new snakeGame(document.getElementById('canvas'));  
};  

var lastTime = 0;  
var vendors = ['webkit', 'moz'];  
for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {  
    window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];  
    window.cancelAnimationFrame =  
      window[vendors[x]+'CancelAnimationFrame'] || window[vendors[x]+'CancelRequestAnimationFrame'];  
}  
  
if (!window.requestAnimationFrame)  
window.requestAnimationFrame = function(callback, element) {  
    var currTime = new Date().getTime();  
    var timeToCall = Math.max(0, 16 - (currTime - lastTime));  
    var id = window.setTimeout(function() { callback(currTime + timeToCall); },  
      timeToCall);  
    lastTime = currTime + timeToCall;  
    return id;  
};  
  
if (!window.cancelAnimationFrame)  
window.cancelAnimationFrame = function(id) {  
    clearTimeout(id);  
};  


            
// Snake game function 
// constructor  
function snakeGame(canvas) {  
    // assign base values  
    this.canvas =   canvas || null;     
    this.cw     =   0;                    
    this.ch     =   0;                 
    this.ctx    =   null;               
    this.snake  =   null;            
    this.food   =   {x:0,y:0};        
    this.now    =   ((new Date()).getTime())-1;   
    this.last   =   null;                       
      
    // start prepare function  
    this.prepare();  
    this.init();  
}  
  
// prepare function  

snakeGame.prototype.prepare =   function() {  
    // if there is no canvas or no canvas support, stop here  
    if(this.canvas === null || this.canvas.getContext === undefined) {  return; }     
      
    // assign width, height and context of canvas  
    this.cw     =   this.canvas.width;  
    this.ch     =   this.canvas.height;  
    this.ctx    =   this.canvas.getContext('2d');  
      
  
     
    this.snake  =   new snake(this);  
      
    // add food  
    this.createFood();  
};  
  
 
snakeGame.prototype.init    =   function() {  
    var _this   =   this;  
    window.requestAnimationFrame(function() { _this.gameLoop(); });  
};  
  
// create food function  
// creates new food with random coordinates  
snakeGame.prototype.createFood  =   function() {  

    this.food.x =   ~~(Math.random()*(this.cw-variables.CELL_WIDTH)/variables.CELL_WIDTH);  
   
    this.food.y =   ~~(Math.random()*(this.ch-variables.CELL_HEIGTH)/variables.CELL_HEIGTH);  
};  


snakeGame.prototype.drawCell    =   function(x,y,_color) {  
    if(typeof(x) == undefined || typeof(y) == undefined) {  return; }      
    var color   =   _color || 'red';     
      
    // assign cell rendering color  
    this.ctx.fillStyle  =   color;        
    // render cell  
    this.ctx.fillRect(  
        (x*variables.CELL_WIDTH),              // x starting point  
        (y*variables.CELL_HEIGTH),              // y starting point  
        variables.CELL_WIDTH,                  // rendering width  
        variables.CELL_HEIGTH                  // rendering height  
    );  
              
};  
  

  
// gameloop  
snakeGame.prototype.gameLoop    =   function(delta) {  
    // call gameloop as soon as possible again  
    var _this = this;  
    window.requestAnimationFrame(function() { _this.gameLoop(); } );  
      
    // assign current time  
    var now     =   (new Date()).getTime(),     
        delta   =   (now-this.last);            
      
     
    if(delta > variables.FPS_LIMIT) {  
        // handle game logic  
        this.gameLogic();  
        // draw game  
        this.drawGame();  
        // assign last time   
        this.last = now - (delta%variables.FPS_LIMIT);  
    }  
};  
  

// handles every game mechanic of the game  
snakeGame.prototype.gameLogic   =   function() {  
   
    this.snake.gameLogic();  
};  
  


 
snakeGame.prototype.drawGame    =   function() {  
    // Background
    this.ctx.fillStyle  =   'white';  
    this.ctx.fillRect(0,0,this.cw,this.ch);  
	this.ctx.strokeStyle  =   'white'; 
      
    // render snake  
    this.snake.render();  
      
    // render food  
    this.drawCell(this.food.x,this.food.y);  
      
    // draw score  
    this.ctx.fillStyle  =   'black';  
    this.ctx.fillText('Score: '+this.snake.score,10,390); 
	this.ctx.font="20px Arial"; 
};  


// Snake function

function snake(game) {  
    if(game === null || !(game instanceof snakeGame)) { return false;   } // stop here if game is not set or not an instance of the snakeGame class  
      
    // default values  
    this.game   =   game;  
    this.snake  =   {x:0,y:0,data:[],dir:'r'};  
    this.score  =   0;  
      
    this.init();  
}  
  
// init functions  
// creates a snake and binds controls  
snake.prototype.init = function() {  
    this.createSnake();  
    this.bindControls();  
};  
  
// create function  
// resets data array and creates a   
// fresh snake  
snake.prototype.createSnake = function() {  
    var i = variables.SNAKE_START_LENGTH-1;  
      
    for(;i>=0;i--) {  
        this.snake.data.push({x:i,y:0});  
    }  
};  
  
// resets snake after "Game over"
snake.prototype.restartSnake = function() {  
    this.snake  =   {x:0,y:0,data:[],dir:'r'};  
    this.score  =   0;  
    this.createSnake();  
};  
  
// controls binding  
// assigns function to keypress event  
snake.prototype.bindControls = function() {  
    var _this   =   this;  
      
    if (window.addEventListener) {  
        window.addEventListener("keydown", function(e) { _this.checkControls(e); }, false);  
    } else {  
        window.attachEvent('keydown', function(e) { _this.checkControls(e); });  
    }  
};  
  
// checks keypress    
snake.prototype.checkControls = function(e) {  
    e.preventDefault();  
    var key = e.which;  
      
    if(key === variables.UP && this.snake.dir !== 'd') {  
        this.snake.dir = 'u';  
    } else if(key === variables.RIGHT && this.snake.dir !== 'l') {  
        this.snake.dir = 'r';  
    } else if(key === variables.DOWN && this.snake.dir !== 'u') {  
        this.snake.dir = 'd';  
    } else if(key === variables.LEFT && this.snake.dir !== 'r') {  
        this.snake.dir = 'l';  
    }  
};  
  
// collision checking  
// checks for collision with itself  
snake.prototype.checkCollision = function(x,y) {  
    var i = 0;  
    // loop through snake data  
    for(;i<this.snake.data.length;i++) {  
        // check if the current snake data block has same  
        // x and y coordinate. 
      
        if(this.snake.data[i].x == x && this.snake.data[i].y == y) {  
            return true;  
        }  
    }  
      
    // no collision found, return false  
    return false;  
};  
  
  
snake.prototype.gameLogic = function() {  
    
    var head    =   {x:this.snake.data[0].x,y:this.snake.data[0].y};  
  
    // check movement  
    switch(this.snake.dir) {  
        case 'u':   head.y--;      
                    break;  
        case 'r':   head.x++;       
                    break  
        case 'd':   head.y++;         
                    break;  
        case 'l':   head.x--;       
                    break;  
    }  
      
    var tail = {};  
      
    // check for food collision  
    if(head.x == this.game.food.x && head.y == this.game.food.y) {  
        // add foods position as new part of the snake  
        tail = {x:this.game.food.x,y:this.game.food.y};  
        // create new food  
        this.game.createFood();  
        // add score  
        this.score++;  
    } else {  
        
        this.snake.data.pop();  //  removes the last part of the snake array  
        tail = head;  
    }  
      
    // check if head position is outside the canvas or if there is a collision  
    if(head.x > (this.game.cw/variables.CELL_WIDTH)-1 || head.x < 0 || head.y > (this.game.ch/variables.CELL_WIDTH)-1 || head.y < 0 || this.checkCollision(head.x,head.y)) {  
        
        this.restartSnake();  
        return;  
    }  
  
    this.snake.data.unshift(tail);  
    console.log(this.snake.data);    
};  
// renders the snake on the screen  
snake.prototype.render = function() {  
    var i = 0;  
     
    for(;i<this.snake.data.length;i++) {  
        this.game.drawCell(  
            this.snake.data[i].x,  
            this.snake.data[i].y,  
            'green'  
        );  
    }  
};  
}); 