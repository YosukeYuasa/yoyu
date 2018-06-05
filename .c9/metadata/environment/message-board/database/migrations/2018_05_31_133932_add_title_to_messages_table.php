{"changed":true,"filter":false,"title":"2018_05_31_133932_add_title_to_messages_table.php","tooltip":"/message-board/database/migrations/2018_05_31_133932_add_title_to_messages_table.php","value":"<?php\n\nuse Illuminate\\Support\\Facades\\Schema;\nuse Illuminate\\Database\\Schema\\Blueprint;\nuse Illuminate\\Database\\Migrations\\Migration;\n\nclass AddTitleToMessagesTable extends Migration\n{\n\n    public function up()\n    {\n        Schema::table('messages', function (Blueprint $table) {\n            $table->string('title');\n        });\n    }\n\n\n    public function down()\n    {\n        Schema::table('messages', function (Blueprint $table) {\n            $table->dropColum('title');\n            \n        });\n    }\n}\n","undoManager":{"mark":-2,"position":1,"stack":[[{"start":{"row":8,"column":0},"end":{"row":12,"column":7},"action":"remove","lines":["    /**","     * Run the migrations.","     *","     * @return void","     */"],"id":2}],[{"start":{"row":16,"column":0},"end":{"row":20,"column":7},"action":"remove","lines":["    /**","     * Reverse the migrations.","     *","     * @return void","     */"],"id":4}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":16,"column":0},"end":{"row":16,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527741851361}