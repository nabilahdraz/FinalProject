import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import { Observable } from 'rxjs';

//order url
const baseOrderUrl = "http://localhost:8080/orders";
const postOrderUrl = "http://localhost:8080/orders/add";
const delOrderUrl = "http://localhost:8080/orders/del";
const putOrderUrl = "http://localhost:8080/orders/put";

@Injectable({
  providedIn: 'root'
})
export class ApiService {

  constructor(private _http:HttpClient) { }

  //to connect the frontend to backend

//get all order
getAllOrders():Observable<any>{
  const orderUrl = "http://localhost:8080/allorders"
  return this._http.get<any>(orderUrl)
}

 // create order
 createOrder(order: any):Observable<any>{
  console.log(order,'createapi=>');
  return this._http.post(postOrderUrl, order)
}

//deleting order
  deleteOrder(id: any): Observable<any> {
  return this._http.delete(`${delOrderUrl}/${id}`);

}

//update order
  updateOrder(id: any, order: any): Observable<any> {
  return this._http.put(`${putOrderUrl}/${id}`, order);

}

//get one order
  getOneOrder(id:any):Observable<any>{
  return this._http.get(`${baseOrderUrl}/${id}`);
}

}
