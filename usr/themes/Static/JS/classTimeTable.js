/**
 * 由 HTML5 + CSS3 编写的轻量级课程表，支持自定义扩展。还可用 JavaScript 渲染
 *
 * Author：  chuwen（初文）
 * Website： https://NowTime.cc
 * GitHub：  https://github.com/PrintNow/ClassTimeTable
 * LICENSE： MIT https://github.com/PrintNow/ClassTimeTable/blob/master/LICENSE
*/


    function ClassTimeTable(){
    this.Week2Cn = {
        1: "周一",
        2: "周二",
        3: "周三",
        4: "周四",
        5: "周五",
        6: "周六",
        7: "周日"
    };

    //课表数据
    this.Data = {
        //星期几的课程
        1: {
            //表示从第 1 节课开始
            3: {
                name: "高等数学",
                teacher_name: "彭璇",
                class: {
                    type: "A教学楼",
                    num: 702
                },
                length: 2,//节次有多长
            }
        }
    };

    //颜色集
    //如果需要增加，请自行按照下列格式添加
    //并在 .css 文件写入对应的样式
    this.ColorList = [
        'bg-color-1',
        'bg-color-2',
        'bg-color-3',
        'bg-color-4',
        'bg-color-5',
        'bg-color-6',
        'bg-color-7',
        'bg-color-8',
        'bg-color-9',
        'bg-color-10',
    ];
}

ClassTimeTable.prototype = {
    // constructor: ClassTimeTable,

    //课程表信息配置
    Config: {
        max_day: 7,//最大天数
        session: 11,//多少节课
        selector: "#class-time-table",
        data: this.Data,
        colorList: this.ColorList
    },

    setConfig: function(config={}){
        for(let item in this.Config){
            if(config[item]){
                this.Config[item] = config[item];
            }
        }
    },

    //生成基础表格
    creatBase: function () {
        var ct_header = document.querySelector(this.Config.selector+" > .ct-header"),
            ct_body = document.querySelector(this.Config.selector+" > .ct-body"),
            week_group_date = this.getDates(),//列出本周“月日”数组
            html = '';

        //生成基础表格
        for(let day=0; day<= this.Config['max_day']; day++){
            if(day === 0){
                html = '<div class="ct-th" style="font-size: 14px;">'+new Date().getFullYear()+'年</div>';
            }else{
                var active = "";
                if(day === new Date().getDay()) active = " active";

                html= '<div class="ct-th '+active+'">\n' +
                    '    <span class="title">'+this.Week2Cn[day]+'</span>\n' +
                    '    <span class="day">'+week_group_date[day]+'</span>\n' +
                    '</div>';
            }
            ct_header.innerHTML += html;//插入 header

            html = '<div class="ct-cr">';
            for(let session=0; session < this.Config['session']; session++){
                if(day === 0){
                    html += '<div class="ct-td">'+(session+1)+'</div>';
                }
            }
            html += '</div>';
            ct_body.innerHTML += html;//插入 body
        }
    },

    //更新横跨 1、2、3...行的 css样式
    updateColCss: function(){
        let one = document.querySelector(this.Config['selector']+" > div.ct-body > div:nth-child(1) > div:nth-child(1)").offsetHeight;
        var css = '.ct-body .ct-cr .ct-td.col-1 {height: '+(one-11)+'px}' +
            '.ct-body .ct-cr .ct-td.col-2 {height: '+(one*2-11)+'px}' +
            '.ct-body .ct-cr .ct-td.col-3 {height: '+(one*3-11)+'px}' +
            '.ct-body .ct-cr .ct-td.col-4 {height: '+(one*4-11)+'px}' +
            '.ct-body .ct-cr .ct-td.col-5 {height: '+(one*5-11)+'px}' +
            '.ct-body .ct-cr .ct-td.col-6 {height: '+(one*6-11)+'px}' +
            '.ct-body .ct-cr .ct-td.col-7 {height: '+(one*7-11)+'px}' +
            '.ct-body .ct-cr .ct-td.col-8 {height: '+(one*8-11)+'px}' +
            '.ct-body .ct-cr .ct-td.col-9 {height: '+(one*9-11)+'px}' +
            '.ct-body .ct-cr .ct-td.col-10 {height: '+(one*10-11)+'px}'+
            '.ct-body .ct-cr .ct-td.col-1 {height: '+(one*11-11)+'px}';

        var head = document.head || document.getElementsByTagName('head')[0];
        var style = document.createElement('style');
        style.type = 'text/css';
        if (style.styleSheet){
            style.styleSheet.cssText = css;
        } else {
            style.appendChild(document.createTextNode(css));
        }
        head.appendChild(style);
    },

    //填充课程信息
    fillInfo: function () {
        var color_arr={}, color_list = this.Config['colorList'] ? this.Config['colorList'] : this.ColorList,
            next, kong;

        //填充课程信息
        for(let day in this.Config['data']){
            next = 1;
            for(let item in this.Config['data'][day]){
                html = '';
                let day_item = this.Config['data'][day][item];
                item = parseInt(item);//当前节次

                if(!color_arr[day_item['name']]){
                    color_arr[day_item['name']] = color_list[0];
                    color_list.splice(0,1);//删除用掉了的颜色数组
                }

                if(item > next){
                    //填充空白区域（就是没有课的区域）
                    kong = item-next;
                    html = '<div class="ct-td kongbai col-'+kong+'"></div>';
                }

                var uuid = function(n) { // 生成n位长度的字符串
                    var str = "abcdefghijklmnopqrstuvwxyz-_"; // 可以作为常量放到random外面
                    var result = "";
                    for(var i = 0; i < n; i++) {
                        result += str[parseInt(Math.random() * str.length)];
                    }
                    return result;
                }(12);

                html += '<div data-index="'+day+','+item+'" class="mdui-hoverable ct-td col-'+day_item['length']+' '+color_arr[day_item['name']]+'" style="margin-top: 5px; margin-right: 5px; border-top: 2px;border-right: 2px;">' +
                    '    <div class="name">' +
                    day_item['name'] +
                    '    </div>' +
                    '</div>';

                document.querySelectorAll(this.Config['selector']+" > .ct-body .ct-cr")[day].innerHTML += html;

                next = item+day_item['length'];
            }
        }
    },

    //获取本周 月日 数组
    getDates: function () {
        var currentDate = new Date();
        var timesStamp = currentDate.getTime();
        var currenDay = currentDate.getDay();
        var dates = {}, _Date, date;

        for (var i = 0; i < 7; i++) {
            _Date = new Date(timesStamp + 24 * 60 * 60 * 1000 * (i - (currenDay + 6) % 7));

            month = _Date.getMonth()+1;
            date = _Date.getDate();

            if(month < 10){
                month = "0"+month;
            }
            if(date < 10){
                date = "0"+date;
            }

            dates[i+1] = month+"-"+date;
        }
        return dates
    },

    //点击对应课程回调
    clickListener: function (callback) {
        var _ConfigData = this.Config['data'];

        document.querySelectorAll('div[data-index*=","]').forEach(function (ele, num) {
            ele.addEventListener("click", function () {
                var _arr = this.getAttribute("data-index").split(",");
                return callback(_ConfigData[_arr[0]][_arr[1]]);//回调
            });
        });
    }
};








var classs = new ClassTimeTable();
classs.setConfig({
    max_day: 7,//最大天数
    session: 7,//多少节课
    selector: "#class-table",
    data: {
         1: {
            //表示从第 1 节课开始
            1: {
                name: "物理",
                length: 1,//节次有多长
            },
            2: {
                name: "化学",
				length: 1,
            },
            3: {
                name: "午休",
				length: 1
            },
            4: {
                name: "语文",
				length: 1
            },
            5: {
                name: "自由",
				length: 3
            },
        },
        2: {
            //表示从第 1 节课开始
            1: {
                name: "物理",
                length: 1,//节次有多长
            },
            2: {
                name: "化学",
				length: 1,
            },
            3: {
                name: "午休",
				length: 1
            },
            4: {
                name: "语文",
				length: 1
            },
            5: {
                name: "自由",
				length: 3
            },
        },
        3: {
            //表示从第 1 节课开始
            1: {
                name: "物理",
                length: 1,//节次有多长
            },
            2: {
                name: "化学",
				length: 1,
            },
            3: {
                name: "午休",
				length: 1
            },
            4: {
                name: "语文",
				length: 1
            },
            5: {
                name: "自由",
				length: 3
            },
        },
        4: {
            //表示从第 1 节课开始
            1: {
                name: "物理",
                length: 1,//节次有多长
            },
            2: {
                name: "化学",
				length: 1,
            },
            3: {
                name: "午休",
				length: 1
            },
            4: {
                name: "语文",
				length: 1
            },
            5: {
                name: "自由",
				length: 3
            },
        },
        5: {
            //表示从第 1 节课开始
            1: {
                name: "物理",
                length: 1,//节次有多长
            },
            2: {
                name: "化学",
				length: 1,
            },
            3: {
                name: "午休",
				length: 1
            },
            4: {
                name: "语文",
				length: 1
            },
            5: {
                name: "自由",
				length: 3
            },
        },
        6: {
            //表示从第 1 节课开始
            1: {
                name: "物理",
                length: 1,//节次有多长
            },
            2: {
                name: "化学",
				length: 1,
            },
            3: {
                name: "午休",
				length: 1
            },
            4: {
                name: "语文",
				length: 1
            },
            5: {
                name: "自由",
				length: 3
            },
        },
        7: {
            //表示从第 1 节课开始
            1: {
                name: "数学",
                length: 1,//节次有多长
            },
            2: {
                name: "英语",
				length: 1,
            },
            3: {
                name: "自由",
				length: 1
            },
            4: {
                name: "生物",
				length: 1
            },
            5: {
                name: "政冶",
				length: 1
            },
            6: {
                name: "历史",
				length: 1
            },
            7: {
                name: "地理",
				length: 1
            },
        },
    }
});
classs.creatBase();//建立基础表格框架
classs.updateColCss();//更新CSS样式，以适应各种屏幕
classs.fillInfo();//填充课程信息
classs.clickListener(function (e) {
    //点击课程回调
    console.log(e);
});
