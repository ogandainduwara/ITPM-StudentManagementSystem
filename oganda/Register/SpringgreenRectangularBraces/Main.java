
interface ISatellite{
  void activate();
  void deactivate();

}
interface IGoLocation {
  void displayLocation();

}
class DroneSatellite implements ISatellite{
  private  String Satname;
  public DroneSatellite(String Satname){
    this.Satname=Satname;
  }

  public void activate(){
    System.out.println(this.Satname+"Done sateline done");

  }
  public void deactivate(){
    System.out.println(this.Satname+"Done satalne deactivete");
    
  }

  }

class NavigationSatellite implements ISatellite{
  private  String Satname;
  public NavigationSatellite(String Satname){
    this.Satname=Satname;

  }
   public void activate(){
    System.out.println(this.Satname+"Done sateline done");

  }
  public void deactivate(){
    System.out.println(this.Satname+"Done satalne deactivete");
    
  }

}

class SatelliteLocation implements  IGeoLocation{
   private String location;

   public   SatelliteLocation(String location){
     this.location=location;

   }
   public void displayLocation(){
     System.out.println("Satalite location is ="+this.location);
   }
}

class SatelliteCenter{
   private inr  option;
   private ISatellite ISatellite [ ] ;
   private IGeoLocation IGeoLocation [ ];

   public SatelliteCenter(int  option,ISatellite sat[ ]),IGeoLocation tracker[ ]){
     this.option=option;
     this.ISatellite=sat;
     this.IGeoLocation=tracker;
   }
   public  void startService(){
     ISatellite[this.option].activate();

   }
   public void stopService(){
     ISatellite[this.option].deactivate();

   }
   public void locationService(){
     IGoLocation[this.option].displayLocation();
   }

}
 class SatelliteDemo{
  public static void main(String [] args){
    ISatellite navigationalsatelite = new NavigationSatellite("Ravana-01");
        IGeoLocation LocationTracker= new SatelliteLocation("Sri lanka");
        ISatellite dronesatelite  = new DroneSatellite("Ravana-02");
        IGeoLocation LocationTracker2= new SatelliteLocation("Russia");
       
       
 
        ISatellite[] satliteArray= new ISatellite[]{navigationalsatelite,dronesatelite};
        IGeoLocation [] trackerArray= new IGeoLocation[] {LocationTracker,LocationTracker2};
       
        SatelliteCenter satcenter = new SatelliteCenter (0,satliteArray,trackerArray);
        satcenter.startService();
        satcenter.stopService();
        satcenter.locationService();
       
        SatelliteCenter remoteController = new SatelliteCenter(1,satliteArray,trackerArray);
        remoteController.startService();
        remoteController.stopService();
        remoteController.locationService();
       
       
    }
 
   
}

 