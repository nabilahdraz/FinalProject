import { Component, OnInit } from '@angular/core';
import {ApiService}from '../api.service';

@Component({
  selector: 'app-list-order',
  templateUrl: './list-order.component.html',
  styleUrls: ['./list-order.component.css']
})
export class ListOrderComponent implements OnInit {

  constructor(private service:ApiService) { }

  listData:any;
  successmsg:any;

  ngOnInit(): void {
    this.getAllOrders();
  }

  //get delete id
  deleteId(id:any){
    console.log(id,'deleteid==>');
    this.service.deleteOrder(id).subscribe((res)=>{
      console.log(res,'deleteres==>');
      this.successmsg = res.message;
      this.getAllOrders();

    });

  }
//get order
getAllOrders(){

  this.service.getAllOrders().subscribe((res)=>{
    console.log(res,"res==>");

    this.listData = res.data;
  });

}
}


