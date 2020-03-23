<br/>
<br/>
<div class="mdui-container">
	<div class="mdui-card mdui-shadow-6" style="border-radius: 18px; ">
		<div id="main-1" style="width: 100%;height:300px;"></div>
	</div>
</div>
<br/>
<div class="mdui-container">
    <div class="mdui-row-xs-2">
    	
	  <div class="mdui-col">
		<div class="mdui-card mdui-shadow-6" style="border-radius: 18px; ">
			<div id="main-2" style="width: 100%;height:300px;"></div>
		</div>
	  </div>
	  
	  <div class="mdui-col">
		<div class="mdui-card mdui-shadow-6" style="border-radius: 18px; ">
			<div id="main-3" style="width: 100%;height:300px;"></div>
		</div>
	  </div>
	  
	</div>
</div>
<br/>
<br/>
<script src="https://cdn.bootcss.com/echarts/4.6.0/echarts.js"></script>
<script  type="text/javascript">
// 第二个参数可以指定前面引入的主题
var myChart = echarts.init(document.getElementById('main-1'));

var dataStyle = {
    normal: {
        label: {
            show: false
        },
        labelLine: {
            show: false
        },
        shadowBlur: 0,
        shadowColor: '#203665'
    }
};
option = {
    backgroundColor: "#20263f",
    series: [{
        name: '第一个圆环',
        type: 'pie',
        clockWise: false,
        radius: [70, 80],
        itemStyle: dataStyle,
        //hoverAnimation: false,
        center: ['15%', '50%'],
        data: [{
            value: 690,
            label: {
                normal: {
                    rich: {
                        a: {
                            color: '#3a7ad5',
                            align: 'center',
                            fontSize: 20,
                            fontWeight: "bold"
                        },
                        b: {
                            color: '#fff',
                            align: 'center',
                            fontSize: 16
                        }
                    },
                    formatter: function(params){
                        return "{b|总成绩}\n\n"+"{a|"+params.value+"分}"+"\n\n{b|增长200分}";
                    },
                    position: 'center',
                    show: true,
                    textStyle: {
                        fontSize: '14',
                        fontWeight: 'normal',
                        color: '#fff'
                    }
                }
            },
            itemStyle: {
                normal: {
                    color: '#2c6cc4',
                    shadowColor: '#2c6cc4',
                    shadowBlur: 0
                }
            }
        }, {
            value: 60,
            name: 'invisible',
            itemStyle: {
                normal: {
                    color: '#24375c'
                },
                emphasis: {
                    color: '#24375c'
                }
            }
        }]
    }, {
        name: '第二个圆环',
        type: 'pie',
        clockWise: false,
        radius: [70, 80],
        itemStyle: dataStyle,
        //hoverAnimation: false,
        center: ['50%', '50%'],
        data: [{
            value: 50,
            label: {
                normal: {
                    rich: {
                        a: {
                            color: '#d03e93',
                            align: 'center',
                            fontSize: 20,
                            fontWeight: "bold"
                        },
                        b: {
                            color: '#fff',
                            align: 'center',
                            fontSize: 16
                        }
                    },
                    formatter: function(params){
                        return "{b|成绩稳定性}\n\n"+"{a|"+params.value+"%}"+"\n\n{b|增长50%}";
                    },
                    position: 'center',
                    show: true,
                    textStyle: {
                        fontSize: '14',
                        fontWeight: 'normal',
                        color: '#fff'
                    }
                }
            },
            itemStyle: {
                normal: {
                    color: '#ef45ac',
                    shadowColor: '#ef45ac',
                    shadowBlur: 0
                }
            }
        }, {
            value: 50,
            name: 'invisible',
            itemStyle: {
                normal: {
                    color: '#412a4e'
                },
                emphasis: {
                    color: '#412a4e'
                }
            }
        }]
    }, {
        name: '第三个圆环',
        type: 'pie',
        clockWise: false,
        radius: [70, 80],
        itemStyle: dataStyle,
        //hoverAnimation: false,
        center: ['85%', '50%'],
        data: [{
            value: 5,
            label: {
                normal: {
                    rich: {
                        a: {
                            color: '#603dd0',
                            align: 'center',
                            fontSize: 20,
                            fontWeight: "bold"
                        },
                        b: {
                            color: '#fff',
                            align: 'center',
                            fontSize: 16
                        }
                    },
                    formatter: function(params){
                        return "{b|系统智商值}\n\n"+"{a|"+params.value+"%}"+"\n\n{b|增长2%}";
                    },
                    position: 'center',
                    show: true,
                    textStyle: {
                        fontSize: '14',
                        fontWeight: 'normal',
                        color: '#fff'
                    }
                }
            },
            itemStyle: {
                normal: {
                    color: '#613fd1',
                    shadowColor: '#613fd1',
                    shadowBlur: 0
                }
            }
        }, {
            value: 25,
            name: 'invisible',
            itemStyle: {
                normal: {
                    color: '#453284'
                },
                emphasis: {
                    color: '#453284'
                }
            }
        }]
    }]
}
// 使用刚指定的配置项和数据显示图表。
myChart.setOption(option);
</script>

<script  type="text/javascript">
// 第二个参数可以指定前面引入的主题
var myChart = echarts.init(document.getElementById('main-2'));

var name_flag = 0;
var data = [{
        "value": "84.5",
        "name": "语文",
        "itemStyle": {
            "normal": {
                "color": {
                    "x": 1,
                    "y": 1,
                    "x2": 0,
                    "y2": 0,
                    "type": "linear",
                    "global": false,
                    "colorStops": [{
                            "offset": 0,
                            "color": "#058aee"
                        },
                        {
                            "offset": 1,
                            "color": "#0ed2f9"
                        }
                    ]
                }
            }
        }
    },
    {
        "value": "56",
        "name": "数学",
        "itemStyle": {
            "normal": {
                "color": {
                    "x": 1,
                    "y": 1,
                    "x2": 0,
                    "y2": 0,
                    "type": "linear",
                    "global": false,
                    "colorStops": [{
                            "offset": 0,
                            "color": "#0666e8"
                        },
                        {
                            "offset": 1,
                            "color": "#0486ed"
                        }
                    ]
                }
            }
        }
    },
    {
        "value": "24.5",
        "name": "英语",
        "itemStyle": {
            "normal": {
                "color": {
                    "x": 1,
                    "y": 1,
                    "x2": 0,
                    "y2": 0,
                    "type": "linear",
                    "global": false,
                    "colorStops": [{
                            "offset": 0,
                            "color": "rgb(0,254,157)"
                        },
                        {
                            "offset": 1,
                            "color": "rgb(2,191,241)"
                        }
                    ]
                }
            }
        }
    },
    {
        "value": "62",
        "name": "历史",
        "itemStyle": {
            "normal": {
                "color": {
                    "x": 1,
                    "y": 1,
                    "x2": 0,
                    "y2": 0,
                    "type": "linear",
                    "global": false,
                    "colorStops": [{
                            "offset": 0,
                            "color": "rgb(51,156,255)"
                        },
                        {
                            "offset": 1,
                            "color": "rgb(145,127,255)"
                        }
                    ]
                }
            }
        }
    },
    {
        "value": "42",
        "name": "物理",
        "itemStyle": {
            "normal": {
                "color": {
                    "x": 1,
                    "y": 1,
                    "x2": 0,
                    "y2": 0,
                    "type": "linear",
                    "global": false,
                    "colorStops": [{
                            "offset": 0,
                            "color": "#fdc502"
                        },
                        {
                            "offset": 1,
                            "color": "#fcfa02"
                        }
                    ]
                }
            }
        }
    },
    {
        "value": 55,
        "name": "生物",
        "itemStyle": {
            "normal": {
                "color": {
                    "x": 1,
                    "y": 1,
                    "x2": 0,
                    "y2": 0,
                    "type": "linear",
                    "global": false,
                    "colorStops": [{
                            "offset": 0,
                            "color": "#fdc985"
                        },
                        {
                            "offset": 1,
                            "color": "#ffaf60"
                        }
                    ]
                }
            }
        }
    },
    {
        "value": 49,
        "name": "地理",
        "itemStyle": {
            "normal": {
                "color": {
                    "x": 1,
                    "y": 1,
                    "x2": 0,
                    "y2": 0,
                    "type": "linear",
                    "global": false,
                    "colorStops": [{
                            "offset": 0,
                            "color": "#ea7500"
                        },
                        {
                            "offset": 1,
                            "color": "#ffaf60"
                        }
                    ]
                }
            }
        }
    },
    {
        "value": 60,
        "name": "化学",
        "itemStyle": {
            "normal": {
                "color": {
                    "x": 1,
                    "y": 1,
                    "x2": 0,
                    "y2": 0,
                    "type": "linear",
                    "global": false,
                    "colorStops": [{
                            "offset": 0,
                            "color": "#ff4512"
                        },
                        {
                            "offset": 1,
                            "color": "#ffaf60"
                        }
                    ]
                }
            }
        }
    },
    {
        "value": 54,
        "name": "政治",
        "itemStyle": {
            "normal": {
                "color": {
                    "x": 1,
                    "y": 1,
                    "x2": 0,
                    "y2": 0,
                    "type": "linear",
                    "global": false,
                    "colorStops": [{
                            "offset": 0,
                            "color": "#ea7658"
                        },
                        {
                            "offset": 1,
                            "color": "#ffaf60"
                        }
                    ]
                }
            }
        }
    }
];
var option = {
    backgroundColor: '#010828',
    "title": [{
            "show": true,
            "text": "",
            "textStyle": {
                "color": "white",
                "fontSize": 18,
                "fontStyle": "normal",
                "fontWeight": "normal"
            },
            "top": "42%",
            "left": "center"
        },
        {
            "show": true,
            "text": "",
            "textStyle": {
                "color": "white",
                "fontSize": 16,
                "fontStyle": "normal",
                "fontWeight": "normal"
            },
            "top": "52%",
            "left": "center"
        },
    ],
    tooltip: {
        trigger: 'item',
        formatter: "{b} <br/>分数:{c} ({d}%)",
        textStyle: {
            // fontSize: 36,
            fontWeight: 'bold',
            color: 'white',
        },
    },
    //自己设置扇形图颜色
    series: [{
            name: '洞洞',
            type: 'pie',
            //位置
            center: ['50%', '50%'],
            radius: ['30%', '50%'],
            avoidLabelOverlap: false,
            selectedOffset: 25,
            hoverAnimation: false,
            itemStyle: {
                normal: {
                    shadowColor: 'rgba(0, 0, 0, 0.8)',
                    shadowBlur: 10,
                }
            },
            labelLine: {
                length: 27,
                length2: 30,
                lineStyle: {
                    width: 3
                }
            },
            label: {
                fontWeight: 'bold',
                fontSize: '20',
                color: 'white'
            },
            data: data
        },
        {
            name: '访问',
            type: 'pie',
            radius: '30%',
            z: 1,
            itemStyle: {
                normal: {
                    label: {
                        show: false
                    },
                    labelLine: {
                        show: false
                    }
                },
                emphasis: {
                    label: {
                        show: false,
                        position: 'center',
                        textStyle: {
                            fontSize: '30',
                            fontWeight: 'bold'
                        }
                    }
                }
            },
            color: ['#0e1d7a'],
            data: [{
                value: 100,
                tooltip: {
                    show: false
                }
            }, ]
        }
    ]
};
var timeTicket = null;
timeTicket = setInterval(() => {
    if (name_flag > 9) {
        myChart.dispatchAction({
            type: 'pieUnSelect',
            seriesIndex: 0,
            dataIndex: 9
        });
        name_flag = 0;
    }
    myChart.dispatchAction({
        type: 'pieSelect',
        seriesIndex: 0,
        dataIndex: name_flag
    });
    if (name_flag !== 0) {
        myChart.dispatchAction({
            type: 'pieUnSelect',
            seriesIndex: 0,
            dataIndex: name_flag - 1
        });
    }
    option.title[0].text = option.series[0].data[name_flag].name;
    option.title[1].text = option.series[0].data[name_flag].value;
    myChart.setOption(option);
    name_flag++;
}, 2000);
// 使用刚指定的配置项和数据显示图表。
myChart.setOption(option);
</script>

<script  type="text/javascript">
// 第二个参数可以指定前面引入的主题
var myops = echarts.init(document.getElementById('main-3'));

lop = {
	backgroundColor: "#20263f",
    tooltip: {
        trigger: 'axis'
    },
    legend: {
        color: ["#F58080", "#47D8BE", "#F9A589"],
        data: ['新报', '流失', '续费'],
        left: 'center',
        bottom: 'bottom'
    },
    grid: {
        top: 'middle',
        left: '3%',
        right: '4%',
        bottom: '3%',
        height: '80%',
        containLabel: true
    },
    xAxis: {
        type: 'category',
        data: [100, 200, 20, 30, 60, 89],
        axisLine: {
            lineStyle: {
                color: "#999"
            }
        }
    },
    yAxis: {
        type: 'value',

        splitLine: {
            lineStyle: {
                type: 'dashed',
                color: '#DDD'
            }
        },
        axisLine: {
            show: false,
            lineStyle: {
                color: "#333"
            },
        },
        nameTextStyle: {
            color: "#999"
        },
        splitArea: {
            show: false
        }
    },
    series: [{
            name: '新报',
            type: 'line',
            data: [800, 900, 220, 130, 660, 289],
            color: "#F58080",
            lineStyle: {
                normal: {
                    width: 5,
                    color: {
                        type: 'linear',

                        colorStops: [{
                            offset: 0,
                            color: '#FFCAD4' // 0% 处的颜色
                        }, {
                            offset: 0.4,
                            color: '#F58080' // 100% 处的颜色
                        }, {
                            offset: 1,
                            color: '#F58080' // 100% 处的颜色
                        }],
                        globalCoord: false // 缺省为 false
                    },
                    shadowColor: 'rgba(245,128,128, 0.5)',
                    shadowBlur: 10,
                    shadowOffsetY: 7
                }
            },
            itemStyle: {
                normal: {
                    color: '#F58080',
                    borderWidth: 10,
                    /*shadowColor: 'rgba(72,216,191, 0.3)',
                     shadowBlur: 100,*/
                    borderColor: "#F58080"
                }
            },
            smooth: true
        },
        {
            name: '流失',
            type: 'line',
            data: [123, 568, 111, 222, 123, 56],
            lineStyle: {
                normal: {
                    width: 5,
                    color: {
                        type: 'linear',

                        colorStops: [{
                                offset: 0,
                                color: '#AAF487' // 0% 处的颜色
                            },
                            {
                                offset: 0.4,
                                color: '#47D8BE' // 100% 处的颜色
                            }, {
                                offset: 1,
                                color: '#47D8BE' // 100% 处的颜色
                            }
                        ],
                        globalCoord: false // 缺省为 false
                    },
                    shadowColor: 'rgba(71,216,190, 0.5)',
                    shadowBlur: 10,
                    shadowOffsetY: 7
                }
            },
            itemStyle: {
                normal: {
                    color: '#AAF487',
                    borderWidth: 10,
                    /*shadowColor: 'rgba(72,216,191, 0.3)',
                     shadowBlur: 100,*/
                    borderColor: "#AAF487"
                }
            },
            smooth: true
        },
        {
            name: '续费',
            type: 'line',
            data: [125, 568, 25, 36, 784, 56],
            lineStyle: {
                normal: {
                    width: 5,
                    color: {
                        type: 'linear',

                        colorStops: [{
                                offset: 0,
                                color: '#F6D06F' // 0% 处的颜色
                            },
                            {
                                offset: 0.4,
                                color: '#F9A589' // 100% 处的颜色
                            }, {
                                offset: 1,
                                color: '#F9A589' // 100% 处的颜色
                            }
                        ],
                        globalCoord: false // 缺省为 false
                    },
                    shadowColor: 'rgba(249,165,137, 0.5)',
                    shadowBlur: 10,
                    shadowOffsetY: 7
                }
            },
            itemStyle: {
                normal: {
                    color: '#F6D06F',
                    borderWidth: 10,
                    /*shadowColor: 'rgba(72,216,191, 0.3)',
                     shadowBlur: 100,*/
                    borderColor: "#F6D06F"
                }
            },
            smooth: true
        }
    ]
};

// 使用刚指定的配置项和数据显示图表。
myops.setOption(lop);
</script>