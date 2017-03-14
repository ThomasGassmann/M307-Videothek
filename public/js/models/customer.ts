import { IEntity } from "./entity";
import { MembershipState } from "./membership";

export class Customer implements IEntity {
    private id: number;
    private firstName: string;
    private lastName: string;
    private mail: string;
    private phone: string;
    private memberShipState: MembershipState;

    public constructor(id: number, firstName: string, lastName: string, mail: string, state: MembershipState, phone: string = null) {
        this.Id = id;
        this.FirstName = firstName;
        this.LastName = lastName;
        this.Mail = mail;
        this.Membership = state;
        this.Phone = phone === null ? "" : phone;
    }

    public get Id(): number {
        return this.id;
    }

    public set Id(value: number) {
        this.Id = value;
    }

    public get FirstName(): string {
        return this.firstName;
    }

    public set FirstName(value: string) {
        this.firstName = value;
    }

    public get FullName(): string {
        return this.FirstName + " " + this.LastName;
    }
    
    public get LastName(): string {
        return this.lastName;
    }

    public set LastName(value: string) {
        this.lastName = value;
    }

    public get Mail(): string {
        return this.mail;
    }

    public set Mail(value: string) {
        this.mail = value;
    }

    public get Phone(): string {
        return this.phone;
    }

    public set Phone(value: string) {
        this.phone = value;
    }

    public get Membership(): MembershipState {
        return this.memberShipState;
    }

    public set Membership(value: MembershipState) {
        this.memberShipState = value;
    }
}