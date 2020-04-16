<div class="mdui-container">
    <div class="mdui-row-xs-5">
    	
	  <div class="mdui-col">
		<div class="mdui-card">
		  <div class="mdui-card-content">
		  	<div id="main" style="width: 100%;height:100%;"></div>
		  </div>
		</div>
	  </div>
	  
	  <div class="mdui-col">
		<div class="mdui-card">
		  <div class="mdui-card-content">
		  	
		  </div>
		</div>
	  </div>

	  <div class="mdui-col">
		<div class="mdui-card">
		  <div class="mdui-card-content">
		  	
		  </div>
		</div>
	  </div>

	  <div class="mdui-col">
		<div class="mdui-card">
		  <div class="mdui-card-content">
		  	
		  </div>
		</div>
	  </div>

	  <div class="mdui-col">
		<div class="mdui-card">
		  <div class="mdui-card-content">
		  	
		  </div>
		</div>
	  </div>
	  
	</div>
</div>



<br/>
<br/>
<div class="mdui-container">
	<div class="mdui-col">
		<div class="mdui-card mdui-shadow-6" style="border-radius: 18px; ">
			<div id="main" style="width: 100%;height:300px;"></div>
		</div>
	</div>
</div>
<br/>
<br/>
<script src="https://cdn.bootcss.com/echarts/4.6.0/echarts.js"></script>
<script  type="text/javascript">
// 第二个参数可以指定前面引入的主题
var myChart = echarts.init(document.getElementById('main'));


var dataStyle = {
    normal: {
        label: {
            show: false
        },
        labelLine: {
            show: false
        },
        shadowBlur: 0,
        //shadowColor: '#203665'
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
            value: 25,
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
                        return "{b|在线统计}\n\n"+"{a|"+params.value+"个}"+"\n\n{b|增长2%}";
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
            value: 75,
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
                        return "{b|离线统计}\n\n"+"{a|"+params.value+"个}"+"\n\n{b|增长2%}";
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
            value: 75,
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
                        return "{b|缺报统计}\n\n"+"{a|"+params.value+"个}"+"\n\n{b|增长2%}";
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