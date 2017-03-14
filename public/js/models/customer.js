"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var Customer = (function () {
    function Customer(id, firstName, lastName, mail, state, phone) {
        if (phone === void 0) { phone = null; }
        this.Id = id;
        this.FirstName = firstName;
        this.LastName = lastName;
        this.Mail = mail;
        this.Membership = state;
        this.Phone = phone === null ? "" : phone;
    }
    Object.defineProperty(Customer.prototype, "Id", {
        get: function () {
            return this.id;
        },
        set: function (value) {
            this.Id = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Customer.prototype, "FirstName", {
        get: function () {
            return this.firstName;
        },
        set: function (value) {
            this.firstName = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Customer.prototype, "FullName", {
        get: function () {
            return this.FirstName + " " + this.LastName;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Customer.prototype, "LastName", {
        get: function () {
            return this.lastName;
        },
        set: function (value) {
            this.lastName = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Customer.prototype, "Mail", {
        get: function () {
            return this.mail;
        },
        set: function (value) {
            this.mail = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Customer.prototype, "Phone", {
        get: function () {
            return this.phone;
        },
        set: function (value) {
            this.phone = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Customer.prototype, "Membership", {
        get: function () {
            return this.memberShipState;
        },
        set: function (value) {
            this.memberShipState = value;
        },
        enumerable: true,
        configurable: true
    });
    return Customer;
}());
exports.Customer = Customer;
