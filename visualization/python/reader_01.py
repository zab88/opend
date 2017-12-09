import pandas as pd

dd = pd.read_csv('../data/opendata.csv')

# dd = dd.query('region="Новосибирская область"')
dd = dd[dd['region'].str.contains("Новосибирск")]

# for k, r in dd.iterrows():
#     print(r['name'], r['region'], r['date'], r['value'])

print(set(dd.name))
